/* =========================================================
   script.js — The Pala Ubud (versi Mandarin)

   Blok 1: hero + booking bar (kirim ke email)
   Blok 2: video lengkap (click to load)
   Blok 3: slider villa
   Blok 4: reveal saat masuk layar
   Blok 5: ulasan tamu

   Tiap blok punya DOMContentLoaded sendiri — JANGAN digabung,
   karena beberapa blok memakai nama variabel yang sama
   (track, prev, next, slide, stepSize, refresh, ticking).
   ========================================================= */

/* ============================ BLOK 1 ============================
   Hero + booking bar
   ================================================================ */
document.addEventListener("DOMContentLoaded", () => {
  const hero = document.querySelector(".pala-hero");
  if (!hero) return;

  const form = hero.querySelector(".pala-booking");
  const video = hero.querySelector(".pala-hero__video");
  const poster = hero.querySelector(".pala-hero__poster");
  const videoControls = hero.querySelector(".pala-hero__video-controls");
  const playButton = hero.querySelector('[data-video-action="play"]');
  const playIcon = hero.querySelector("[data-icon-play]");
  const pauseIcon = hero.querySelector("[data-icon-pause]");
  const guestToggle = hero.querySelector("[data-guest-toggle]");
  const guestPanel = hero.querySelector("[data-guest-panel]");
  const guestSummary = hero.querySelector("[data-guest-summary]");
  const status = hero.querySelector("[data-booking-status]");
  const calendar = hero.querySelector("[data-calendar]");
  const calendarTitle = hero.querySelector("[data-calendar-title]");
  const calendarMonths = hero.querySelector("[data-calendar-months]");
  const calendarPrev = hero.querySelector("[data-calendar-prev]");
  const calendarNext = hero.querySelector("[data-calendar-next]");
  const calendarClose = hero.querySelector("[data-calendar-close]");
  const dateButtons = hero.querySelectorAll("[data-date-button]");
  const checkin = form.elements.checkin;
  const checkout = form.elements.checkout;

  const state = { adult: 1, child: 0 };
  const today = new Date();
  const todayStart = new Date(today.getFullYear(), today.getMonth(), today.getDate());
  const currentMonth = new Date(today.getFullYear(), today.getMonth(), 1);
  let calendarMode = "checkin";
  let calendarCursor = new Date(currentMonth);

  const posterSrc = (hero.dataset.posterSrc || "").trim();
  const videoSrc = (hero.dataset.videoSrc || "").trim();

  if (posterSrc) {
    poster.src = posterSrc;
    poster.hidden = false;
    video.poster = posterSrc;
  }

  if (videoSrc) {
    video.src = videoSrc;
    videoControls.hidden = false;
    video.load();
  }

  const toDateValue = (date) => {
    const year = date.getFullYear();
    const month = String(date.getMonth() + 1).padStart(2, "0");
    const day = String(date.getDate()).padStart(2, "0");
    return `${year}-${month}-${day}`;
  };

  const parseDateValue = (value) => {
    if (!value) return null;
    const [year, month, day] = value.split("-").map(Number);
    return new Date(year, month - 1, day);
  };

  const formatDate = (value) => {
    const date = parseDateValue(value);
    if (!date) return "";
    return new Intl.DateTimeFormat("zh-CN", { month: "short", day: "numeric" }).format(date);
  };

  const updateDateField = (name) => {
    const input = name === "checkin" ? checkin : checkout;
    const button = hero.querySelector(`[data-date-button="${name}"]`);
    const label = hero.querySelector(`[data-date-label="${name}"]`);
    label.textContent = formatDate(input.value) || (name === "checkin" ? "入住日期" : "退房日期");
    button.classList.toggle("is-selected", Boolean(input.value));
  };

  const closeCalendar = () => {
    calendar.classList.remove("is-open");
    dateButtons.forEach((button) => button.setAttribute("aria-expanded", "false"));
  };

  const selectDate = (value) => {
    if (calendarMode === "checkin") {
      checkin.value = value;
      if (checkout.value && checkout.value <= value) checkout.value = "";
      updateDateField("checkin");
      updateDateField("checkout");
      calendarMode = "checkout";
      calendarTitle.textContent = "选择退房日期";
      dateButtons.forEach((button) => {
        button.setAttribute("aria-expanded", String(button.dataset.dateButton === "checkout"));
      });
      renderCalendar();
      return;
    }

    checkout.value = value;
    updateDateField("checkout");
    closeCalendar();
  };

  const renderMonth = (monthDate) => {
    const month = document.createElement("section");
    month.className = "pala-calendar__month";

    const title = document.createElement("div");
    title.className = "pala-calendar__month-title";
    title.textContent = new Intl.DateTimeFormat("zh-CN", {
      year: "numeric",
      month: "long",
    }).format(monthDate);
    month.appendChild(title);

    const weekdays = document.createElement("div");
    weekdays.className = "pala-calendar__weekdays";
    ["一", "二", "三", "四", "五", "六", "日"].forEach((label) => {
      const item = document.createElement("span");
      item.className = "pala-calendar__weekday";
      item.textContent = label;
      weekdays.appendChild(item);
    });
    month.appendChild(weekdays);

    const days = document.createElement("div");
    days.className = "pala-calendar__days";
    const firstDay = new Date(monthDate.getFullYear(), monthDate.getMonth(), 1);
    const leadingBlanks = (firstDay.getDay() + 6) % 7;
    const totalDays = new Date(monthDate.getFullYear(), monthDate.getMonth() + 1, 0).getDate();

    for (let index = 0; index < leadingBlanks; index += 1) {
      const blank = document.createElement("span");
      blank.className = "pala-calendar__blank";
      days.appendChild(blank);
    }

    for (let day = 1; day <= totalDays; day += 1) {
      const date = new Date(monthDate.getFullYear(), monthDate.getMonth(), day);
      const value = toDateValue(date);
      const button = document.createElement("button");
      button.type = "button";
      button.className = "pala-calendar__day";
      button.textContent = String(day);
      button.setAttribute(
        "aria-label",
        new Intl.DateTimeFormat("zh-CN", {
          year: "numeric",
          month: "long",
          day: "numeric",
        }).format(date),
      );

      const disabledForCheckout =
        calendarMode === "checkout" && checkin.value && value <= checkin.value;
      button.disabled = date < todayStart || disabledForCheckout;

      if (value === toDateValue(todayStart)) button.classList.add("is-today");
      if (value === checkin.value || value === checkout.value) button.classList.add("is-selected");
      if (checkin.value && checkout.value && value > checkin.value && value < checkout.value) {
        button.classList.add("is-in-range");
      }

      button.addEventListener("click", () => selectDate(value));
      days.appendChild(button);
    }

    month.appendChild(days);
    return month;
  };

  function renderCalendar() {
    calendarTitle.textContent = calendarMode === "checkin" ? "选择入住日期" : "选择退房日期";
    calendarMonths.replaceChildren();
    calendarMonths.appendChild(renderMonth(calendarCursor));
    calendarMonths.appendChild(
      renderMonth(new Date(calendarCursor.getFullYear(), calendarCursor.getMonth() + 1, 1)),
    );
    calendarPrev.disabled = calendarCursor.getTime() <= currentMonth.getTime();
  }

  const openCalendar = (requestedMode) => {
    calendarMode = requestedMode === "checkout" && !checkin.value ? "checkin" : requestedMode;
    const selectedValue =
      calendarMode === "checkout" ? checkout.value || checkin.value : checkin.value;
    const selectedDate = parseDateValue(selectedValue) || todayStart;
    calendarCursor = new Date(selectedDate.getFullYear(), selectedDate.getMonth(), 1);
    guestPanel.classList.remove("is-open");
    guestToggle.setAttribute("aria-expanded", "false");
    calendar.classList.add("is-open");
    dateButtons.forEach((button) => {
      button.setAttribute("aria-expanded", String(button.dataset.dateButton === calendarMode));
    });
    renderCalendar();
  };

  dateButtons.forEach((button) => {
    button.addEventListener("click", (event) => {
      event.stopPropagation();
      openCalendar(button.dataset.dateButton);
    });
  });

  calendarPrev.addEventListener("click", () => {
    if (calendarCursor.getTime() <= currentMonth.getTime()) return;
    calendarCursor = new Date(calendarCursor.getFullYear(), calendarCursor.getMonth() - 1, 1);
    renderCalendar();
  });

  calendarNext.addEventListener("click", () => {
    calendarCursor = new Date(calendarCursor.getFullYear(), calendarCursor.getMonth() + 1, 1);
    renderCalendar();
  });

  calendarClose.addEventListener("click", closeCalendar);
  calendar.addEventListener("click", (event) => event.stopPropagation());

  const renderGuests = () => {
    hero.querySelector('[data-count="adult"]').textContent = state.adult;
    hero.querySelector('[data-count="child"]').textContent = state.child;
    guestSummary.textContent = `${state.adult}位成人，${state.child}名儿童`;
  };

  guestToggle.addEventListener("click", () => {
    closeCalendar();
    const isOpen = guestPanel.classList.toggle("is-open");
    guestToggle.setAttribute("aria-expanded", String(isOpen));
  });

  hero.querySelectorAll("[data-step]").forEach((button) => {
    button.addEventListener("click", () => {
      const [type, direction] = button.dataset.step.split(":");
      const minimum = type === "adult" ? 1 : 0;
      state[type] = Math.min(12, Math.max(minimum, state[type] + Number(direction)));
      renderGuests();
    });
  });

  document.addEventListener("click", (event) => {
    if (!calendar.contains(event.target)) closeCalendar();
    if (!guestPanel.contains(event.target) && !guestToggle.contains(event.target)) {
      guestPanel.classList.remove("is-open");
      guestToggle.setAttribute("aria-expanded", "false");
    }
  });

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
      closeCalendar();
      guestPanel.classList.remove("is-open");
      guestToggle.setAttribute("aria-expanded", "false");
    }
  });

  /* Tombol play/pause. Dijaga null-check karena kalau markup-nya
     berubah, error di sini akan mematikan form booking di bawahnya.
     Tombol MUTE sudah tidak ada — loop hero di-encode tanpa audio (-an). */
  if (playButton) {
    playButton.addEventListener("click", async () => {
      if (video.paused) {
        try {
          await video.play();
        } catch (_) {}
      } else {
        video.pause();
      }
      const isPaused = video.paused;
      if (playIcon) playIcon.hidden = !isPaused;
      if (pauseIcon) pauseIcon.hidden = isPaused;
      playButton.setAttribute("aria-label", isPaused ? "播放视频" : "暂停视频");
    });
  }

  video.addEventListener("error", () => {
    if (videoControls) videoControls.hidden = true;
  });

  /* ---------------- Kirim booking ke email ---------------- */
  const BOOKING_EMAIL = "enquiry@thepalaubudresort.com";
  const BOOKING_PHONE = "+62 811-3888-565";

  const formatMailDate = (value) => {
    const date = parseDateValue(value);
    if (!date) return "";
    return `${date.getFullYear()}年${date.getMonth() + 1}月${date.getDate()}日`;
  };

  /* Nama villa diambil dari TEKS option, bukan value-nya,
     supaya yang masuk ke email "阿贡别墅" dan bukan "agung" */
  const selectedVillaLabel = () => {
    const select = form.elements.villa;
    if (!select.value) return "未指定";
    return select.selectedOptions[0].textContent.trim();
  };

  const buildMailBody = (details) => {
    const nights = Math.round(
      (parseDateValue(details.checkout) - parseDateValue(details.checkin)) / 86400000,
    );

    const guests =
      details.children > 0
        ? `${details.adults} 位成人，${details.children} 名儿童`
        : `${details.adults} 位成人`;

    return [
      "您好，我想咨询以下预订：",
      "",
      `入住日期：${formatMailDate(details.checkin)}`,
      `退房日期：${formatMailDate(details.checkout)}`,
      `住宿晚数：${nights} 晚`,
      `入住人数：${guests}`,
      `意向别墅：${details.villaLabel}`,
      "",
      "联系电话：",
      "其他需求：",
      "",
      "（此邮件由官网预订栏自动生成）",
      "",
    ].join("\r\n");
  };

  form.addEventListener("submit", (event) => {
    event.preventDefault();
    status.textContent = "";

    if (!checkin.value || !checkout.value) {
      status.textContent = "请选择入住日期和退房日期。";
      hero
        .querySelector(`[data-date-button="${!checkin.value ? "checkin" : "checkout"}"]`)
        .focus();
      return;
    }

    const details = {
      checkin: checkin.value,
      checkout: checkout.value,
      adults: state.adult,
      children: state.child,
      villa: form.elements.villa.value,
      villaLabel: selectedVillaLabel(),
    };

    /* Jalur 1 — booking engine, kalau data-booking-url sudah diisi.
       Sekarang kosong, jadi selalu lewat email. */
    const bookingUrl = (form.dataset.bookingUrl || "").trim();
    if (bookingUrl) {
      const target = new URL(bookingUrl, window.location.href);
      ["checkin", "checkout", "adults", "children", "villa"].forEach((key) => {
        target.searchParams.set(key, details[key]);
      });
      window.location.href = target.toString();
      return;
    }

    /* Jalur 2 — email. Aksara Han WAJIB di-encode, kalau tidak
       sebagian klien email menampilkannya sebagai karakter rusak. */
    const subject = `预订咨询 · ${details.villaLabel} · ${formatMailDate(details.checkin)}`;
    const body = buildMailBody(details);
    const mailto =
      `mailto:${BOOKING_EMAIL}` +
      `?subject=${encodeURIComponent(subject)}` +
      `&body=${encodeURIComponent(body)}`;

    /* Browser di dalam aplikasi WeChat memblokir mailto: — tombolnya
       akan terlihat "tidak bereaksi". Di sana salin teksnya saja. */
    const inWeChat = /MicroMessenger/i.test(navigator.userAgent);
    const askEmail = `请将预订信息发送至 ${BOOKING_EMAIL}，或致电 ${BOOKING_PHONE}。`;

    if (inWeChat) {
      const fallback = `${BOOKING_EMAIL}\r\n\r\n${body}`;
      if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(fallback).then(
          () => {
            status.textContent = `预订信息已复制，请粘贴并发送至 ${BOOKING_EMAIL}。`;
          },
          () => {
            status.textContent = askEmail;
          },
        );
      } else {
        status.textContent = askEmail;
      }
      return;
    }

    window.location.href = mailto;

    /* Kalau tidak ada aplikasi email terpasang, tidak terjadi apa-apa.
       Baris ini memastikan tamu tetap tahu harus ke mana. */
    window.setTimeout(() => {
      status.textContent = `若未自动打开邮件，请发送至 ${BOOKING_EMAIL}，或致电 ${BOOKING_PHONE}。`;
    }, 1200);
  });
});

/* ============================ BLOK 2 ============================
   Video lengkap — baru diunduh setelah tombol play ditekan.
   Blok terpisah supaya tetap jalan di halaman yang tidak punya hero.
   ================================================================ */
document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".pala-film").forEach((film) => {
    const frame = film.querySelector("[data-film-frame]");
    const posterEl = film.querySelector("[data-film-poster]");
    const playBtn = film.querySelector("[data-film-play]");
    const hint = film.querySelector("[data-film-hint]");
    if (!frame || !playBtn) return;

    const videoSrc = (film.dataset.videoSrc || "").trim();
    const posterSrc = (film.dataset.posterSrc || "").trim();

    if (posterSrc && posterEl) {
      posterEl.src = posterSrc;
      posterEl.hidden = false;
    }

    if (!videoSrc) {
      playBtn.hidden = true;
      if (hint) hint.hidden = true;
      return;
    }

    let started = false;

    playBtn.addEventListener("click", () => {
      if (started) return;
      started = true;

      frame.classList.add("is-loading");
      playBtn.disabled = true;

      const video = document.createElement("video");
      video.className = "pala-film__video";
      video.controls = true;
      video.playsInline = true;
      video.preload = "auto";
      video.setAttribute("controlsList", "nodownload");
      if (posterSrc) video.poster = posterSrc;

      video.addEventListener(
        "canplay",
        () => {
          frame.classList.remove("is-loading");
          frame.classList.add("is-playing");
          video.play().catch(() => {});
        },
        { once: true },
      );

      video.addEventListener("error", () => {
        frame.classList.remove("is-loading", "is-playing");
        video.remove();
        started = false;
        playBtn.disabled = false;
        if (hint) hint.textContent = "视频加载失败，请稍后重试。";
      });

      frame.appendChild(video);
      video.src = videoSrc;
      video.load();
    });
  });
});

/* ============================ BLOK 3 ============================
   Slider villa
   ================================================================ */
document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".pala-villas__slider").forEach((slider) => {
    const track = slider.querySelector(".pala-villas__track");
    const prev = slider.querySelector(".pala-villas__nav--prev");
    const next = slider.querySelector(".pala-villas__nav--next");
    const slide = track && track.querySelector(".pala-villas__slide");
    if (!track || !slide || !prev || !next) return;

    const stepSize = () => {
      const gap = parseFloat(getComputedStyle(track).columnGap) || 0;
      return slide.getBoundingClientRect().width + gap;
    };

    const refresh = () => {
      const max = track.scrollWidth - track.clientWidth;
      prev.disabled = track.scrollLeft <= 2;
      next.disabled = track.scrollLeft >= max - 2;
    };

    prev.addEventListener("click", () => track.scrollBy({ left: -stepSize(), behavior: "smooth" }));
    next.addEventListener("click", () => track.scrollBy({ left: stepSize(), behavior: "smooth" }));

    track.addEventListener("keydown", (event) => {
      if (event.key === "ArrowRight") { event.preventDefault(); next.click(); }
      if (event.key === "ArrowLeft")  { event.preventDefault(); prev.click(); }
    });

    let ticking = false;
    track.addEventListener("scroll", () => {
      if (ticking) return;
      ticking = true;
      requestAnimationFrame(() => { refresh(); ticking = false; });
    }, { passive: true });

    window.addEventListener("resize", refresh);
    refresh();
  });
});

/* ============================ BLOK 4 ============================
   Reveal saat masuk layar — section 4 (events) dan 6 (beyond)
   ================================================================ */
document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll(".pala-events, .pala-beyond");
  if (!sections.length) return;

  const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  if (reduceMotion || !("IntersectionObserver" in window)) return;

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add("is-visible");
        observer.unobserve(entry.target);
      });
    },
    { threshold: 0.15, rootMargin: "0px 0px -60px 0px" },
  );

  sections.forEach((section) => {
    section.classList.add("has-reveal");
    observer.observe(section);
  });
});

/* ============================ BLOK 5 ============================
   Ulasan tamu — slider + tombol 展开全文
   ================================================================ */
document.addEventListener("DOMContentLoaded", () => {
  const section = document.querySelector(".pala-reviews");
  if (!section) return;

  section.querySelectorAll(".pala-reviews__card").forEach((card) => {
    const text = card.querySelector(".pala-reviews__text");
    const button = card.querySelector(".pala-reviews__more");
    if (!text || !button) return;

    const isClipped = text.scrollHeight > text.clientHeight + 2;
    if (!isClipped) return;

    button.hidden = false;
    button.setAttribute("aria-expanded", "false");

    button.addEventListener("click", () => {
      const open = text.classList.toggle("is-open");
      button.textContent = open ? "收起" : "展开全文";
      button.setAttribute("aria-expanded", String(open));
    });
  });

  const track = section.querySelector(".pala-reviews__track");
  const prev = section.querySelector(".pala-reviews__nav--prev");
  const next = section.querySelector(".pala-reviews__nav--next");
  const slide = track && track.querySelector(".pala-reviews__slide");
  if (!track || !slide || !prev || !next) return;

  const stepSize = () => {
    const gap = parseFloat(getComputedStyle(track).columnGap) || 0;
    return slide.getBoundingClientRect().width + gap;
  };

  const refresh = () => {
    const max = track.scrollWidth - track.clientWidth;
    prev.disabled = track.scrollLeft <= 2;
    next.disabled = track.scrollLeft >= max - 2;
  };

  prev.addEventListener("click", () => track.scrollBy({ left: -stepSize(), behavior: "smooth" }));
  next.addEventListener("click", () => track.scrollBy({ left: stepSize(), behavior: "smooth" }));

  track.addEventListener("keydown", (event) => {
    if (event.key === "ArrowRight") { event.preventDefault(); next.click(); }
    if (event.key === "ArrowLeft")  { event.preventDefault(); prev.click(); }
  });

  let ticking = false;
  track.addEventListener("scroll", () => {
    if (ticking) return;
    ticking = true;
    requestAnimationFrame(() => { refresh(); ticking = false; });
  }, { passive: true });

  window.addEventListener("resize", refresh);
  refresh();
});