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

/* =========================================================
   Blok masterplan — tempel di script.js sebagai blok terpisah.

   Dua bug dari versi lama yang diperbaiki di sini:

   1. Listener menumpuk. Versi lama memanggil
      tooltipLink.addEventListener() DI DALAM handler klik titik,
      jadi setiap klik menambah satu listener baru. Lima klik =
      lima listener, dan semuanya jalan bersamaan.
      Sekarang listener dipasang SEKALI di luar loop.

   2. querySelector(URL). Versi lama menjalankan
      document.querySelector('https://...') untuk data-link yang
      berisi URL penuh — itu melempar SyntaxError dan menghentikan
      seluruh handler. Sekarang URL dan anchor (#) dipisah.
   ========================================================= */

document.addEventListener("DOMContentLoaded", () => {
  const map = document.querySelector(".pala-mp");
  if (!map) return;

  const wrapper = map.querySelector("[data-mp-wrapper]");
  const tooltip = map.querySelector("[data-mp-tooltip]");
  const ttTitle = map.querySelector("[data-mp-title]");
  const ttSubtitle = map.querySelector("[data-mp-subtitle]");
  const ttBody = map.querySelector("[data-mp-body]");
  const ttLink = map.querySelector("[data-mp-link]");
  const points = map.querySelectorAll(".pala-mp__point");
  if (!wrapper || !tooltip || !points.length) return;

  let activeHref = "";

  const closeTooltip = () => {
    tooltip.classList.remove("is-open");
    points.forEach((p) => {
      p.classList.remove("is-active");
      p.setAttribute("aria-expanded", "false");
    });
  };

  /* Tooltip diposisikan lalu dijepit agar tidak keluar dari peta */
  const placeTooltip = (point) => {
    const wrapRect = wrapper.getBoundingClientRect();
    const ptRect = point.getBoundingClientRect();
    const ttWidth = tooltip.offsetWidth;
    const ttHeight = tooltip.offsetHeight;
    const gap = 14;

    const ptLeft = ptRect.left - wrapRect.left;
    const ptTop = ptRect.top - wrapRect.top;

    // Default: di kanan titik. Kalau mepet tepi kanan, pindah ke kiri.
    let left = ptLeft + ptRect.width + gap;
    if (left + ttWidth > wrapRect.width - 8) {
      left = ptLeft - ttWidth - gap;
    }
    left = Math.max(8, Math.min(left, wrapRect.width - ttWidth - 8));

    let top = ptTop + ptRect.height / 2 - ttHeight / 2;
    top = Math.max(8, Math.min(top, wrapRect.height - ttHeight - 8));

    tooltip.style.left = left + "px";
    tooltip.style.top = top + "px";
  };

  points.forEach((point) => {
    point.setAttribute("aria-expanded", "false");

    point.addEventListener("click", (event) => {
      event.stopPropagation();

      const isSame = point.classList.contains("is-active");
      closeTooltip();
      if (isSame) return;

      point.classList.add("is-active");
      point.setAttribute("aria-expanded", "true");

      ttTitle.textContent = point.dataset.title || "";
      ttSubtitle.textContent = point.dataset.subtitle || "";

      /* Isi tooltip: dari blok data tersembunyi, atau dari teks biasa */
      ttBody.textContent = "";
      if (point.dataset.content) {
        const source = map.querySelector(point.dataset.content);
        if (source) ttBody.innerHTML = source.innerHTML;
      } else if (point.dataset.description) {
        ttBody.textContent = point.dataset.description.trim();
      }

      /* Tombol */
      const label = (point.dataset.button || "").trim();
      activeHref = (point.dataset.link || "").trim();

      if (label && activeHref) {
        ttLink.textContent = label;
        ttLink.href = activeHref;
        ttLink.hidden = false;
      } else {
        ttLink.hidden = true;
        activeHref = "";
      }

      tooltip.classList.add("is-open");
      placeTooltip(point);
    });
  });

  /* Listener tombol dipasang SEKALI, bukan di dalam loop */
  ttLink.addEventListener("click", (event) => {
    if (!activeHref) return;

    // Anchor di halaman yang sama -> scroll halus
    if (activeHref.startsWith("#")) {
      event.preventDefault();
      const target = document.querySelector(activeHref);
      if (target) {
        closeTooltip();
        target.scrollIntoView({ behavior: "smooth", block: "start" });
      }
      return;
    }
    // Selain itu biarkan browser membuka tautannya seperti biasa
  });

  document.addEventListener("click", closeTooltip);
  tooltip.addEventListener("click", (event) => event.stopPropagation());

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") closeTooltip();
  });

  window.addEventListener("resize", closeTooltip);
});

const sections = document.querySelectorAll(".pala-events, .pala-beyond, .pala-wv");

/* =========================================================
   Blok "庄园周边体验" — tempel di script.js sebagai blok terpisah.

   Perbaikan dari versi lama:

   1. onclick="estateScroll(±1)" dihapus. Fungsi global di halaman
      yang berisi banyak section mudah bertabrakan namanya.
      Sekarang listener dipasang dari sini.

   2. estateTotal = 6 tidak lagi ditulis manual — dihitung dari DOM,
      jadi menambah/menghapus kartu tidak perlu mengubah JS.

   3. Bug seret-lalu-klik. Kartu adalah <a>. Di versi lama, menyeret
      lalu melepas mouse ikut memicu klik dan halaman berpindah.
      Sekarang tautan dimatikan sementara selama proses seret.
   ========================================================= */

document.addEventListener("DOMContentLoaded", () => {
  const estate = document.querySelector(".pala-ae");
  if (!estate) return;

  const track = estate.querySelector("[data-ae-track]");
  const count = estate.querySelector("[data-ae-count]");
  const prev = estate.querySelector("[data-ae-prev]");
  const next = estate.querySelector("[data-ae-next]");
  const cards = track ? track.querySelectorAll(".pala-ae__card") : [];
  if (!track || !cards.length) return;

  const total = cards.length;

  const stepSize = () => {
    const gap = parseFloat(getComputedStyle(track).columnGap) || 0;
    return cards[0].getBoundingClientRect().width + gap;
  };

  const currentIndex = () =>
    Math.min(total - 1, Math.max(0, Math.round(track.scrollLeft / stepSize())));

  const refresh = () => {
    const index = currentIndex();
    const max = track.scrollWidth - track.clientWidth;

    if (count) count.textContent = index + 1 + " / " + total;
    if (prev) prev.disabled = track.scrollLeft <= 2;
    if (next) next.disabled = track.scrollLeft >= max - 2;
  };

  const move = (direction) => {
    track.scrollBy({ left: direction * stepSize(), behavior: "smooth" });
  };

  if (prev) prev.addEventListener("click", () => move(-1));
  if (next) next.addEventListener("click", () => move(1));

  track.addEventListener("keydown", (event) => {
    if (event.key === "ArrowRight") { event.preventDefault(); move(1); }
    if (event.key === "ArrowLeft")  { event.preventDefault(); move(-1); }
  });

  let ticking = false;
  track.addEventListener("scroll", () => {
    if (ticking) return;
    ticking = true;
    requestAnimationFrame(() => { refresh(); ticking = false; });
  }, { passive: true });

  window.addEventListener("resize", refresh);

  /* ---------- Seret dengan mouse (desktop) ----------
     Di layar sentuh tidak dipakai — geser jari sudah ditangani
     browser secara native dan jauh lebih halus. */
  let dragging = false;
  let moved = 0;
  let startX = 0;
  let startScroll = 0;

  const stopDrag = () => {
    if (!dragging) return;
    dragging = false;
    // Jeda singkat supaya klik yang menyusul pelepasan mouse
    // tidak sempat membuka halaman kartu
    setTimeout(() => track.classList.remove("is-dragging"), 0);
  };

  track.addEventListener("mousedown", (event) => {
    if (event.button !== 0) return;
    dragging = true;
    moved = 0;
    startX = event.pageX;
    startScroll = track.scrollLeft;
  });

  track.addEventListener("mousemove", (event) => {
    if (!dragging) return;
    const distance = event.pageX - startX;
    moved = Math.abs(distance);

    // Baru dianggap seret setelah 5px, supaya klik biasa tetap jalan
    if (moved > 5) {
      event.preventDefault();
      track.classList.add("is-dragging");
      track.scrollLeft = startScroll - distance * 1.2;
    }
  });

  track.addEventListener("mouseup", stopDrag);
  track.addEventListener("mouseleave", stopDrag);

  refresh();
});

/* =========================================================
   Blok sticky bar — tempel di script.js sebagai blok terpisah.

   Perbaikan dari versi lama:

   1. Listener scroll di-throttle dengan requestAnimationFrame.
      Versi lama menjalankan classList setiap frame scroll —
      terasa pada ponsel Android kelas menengah.

   2. Bar disembunyikan saat footer masuk layar. Versi lama
      membiarkannya melayang di atas footer, menutupi kontak
      dan tautan legal.

   3. { passive: true } supaya scroll tidak tertahan.
   ========================================================= */

document.addEventListener("DOMContentLoaded", () => {
  const bar = document.querySelector(".pala-sb");
  if (!bar) return;

  const footer = document.querySelector(".tpr-ftr");
  const SHOW_AFTER = 500;

  let footerVisible = false;

  /* Footer terlihat -> bar disembunyikan supaya tidak menutupi
     alamat, telepon, dan tautan legal di footer */
  if (footer && "IntersectionObserver" in window) {
    const observer = new IntersectionObserver(
      (entries) => {
        footerVisible = entries[0].isIntersecting;
        update();
      },
      { rootMargin: "0px 0px -40px 0px" }
    );
    observer.observe(footer);
  }

  function update() {
    const show = window.scrollY > SHOW_AFTER && !footerVisible;
    bar.classList.toggle("is-visible", show);
    bar.setAttribute("aria-hidden", String(!show));
  }

  let ticking = false;
  window.addEventListener(
    "scroll",
    () => {
      if (ticking) return;
      ticking = true;
      requestAnimationFrame(() => {
        update();
        ticking = false;
      });
    },
    { passive: true }
  );

  update();
});


document.addEventListener("DOMContentLoaded", () => {
  const hero = document.querySelector(".pala-we-hero");
  if (!hero) return;

  const bg = hero.querySelector(".pala-we-hero__bg");
  if (!bg) return;

  // Hormati preferensi sistem: tanpa gerakan, foto dibiarkan diam
  if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) return;

  const FACTOR = 0.07;
  let ticking = false;
  let inView = true;

  const apply = () => {
    const height = hero.offsetHeight;
    const maxShift = height * 0.08;          // ruang dari height:116%
    const shift = Math.min(window.scrollY * FACTOR, maxShift);
    bg.style.transform = "translate3d(0," + shift.toFixed(1) + "px,0)";
  };

  const onScroll = () => {
    if (ticking || !inView) return;
    ticking = true;
    requestAnimationFrame(() => {
      apply();
      ticking = false;
    });
  };

  // Berhenti menghitung setelah hero keluar layar
  if ("IntersectionObserver" in window) {
    const observer = new IntersectionObserver(
      (entries) => { inView = entries[0].isIntersecting; },
      { threshold: 0 }
    );
    observer.observe(hero);
  }

  window.addEventListener("scroll", onScroll, { passive: true });
  window.addEventListener("resize", apply);
  apply();
});


document.addEventListener("DOMContentLoaded", () => {
  const section = document.querySelector(".pala-wvid");
  if (!section) return;

  const frame = section.querySelector("[data-wvid-frame]");
  const popup = section.querySelector("[data-wvid-popup]");
  const stage = section.querySelector("[data-wvid-stage]");
  const close = section.querySelector("[data-wvid-close]");
  const hint = section.querySelector("[data-wvid-hint]");
  if (!frame || !popup || !stage || !close) return;

  const embedUrl = (section.dataset.embedUrl || "").trim();
  const videoSrc = (section.dataset.videoSrc || "").trim();

  /* Tanpa sumber video, tombol play tidak ada gunanya */
  if (!embedUrl && !videoSrc) {
    frame.disabled = true;
    frame.style.cursor = "default";
    if (hint) hint.textContent = "影片即将上线";
    return;
  }

  let lastFocus = null;

  const openPopup = () => {
    lastFocus = document.activeElement;
    stage.replaceChildren();

    if (embedUrl) {
      const iframe = document.createElement("iframe");
      iframe.src = embedUrl;
      iframe.title = "帕拉乌布度假村影片";
      iframe.allow = "autoplay; fullscreen; encrypted-media";
      iframe.allowFullscreen = true;
      iframe.setAttribute("scrolling", "no");
      iframe.setAttribute("frameborder", "0");
      stage.appendChild(iframe);
    } else {
      const video = document.createElement("video");
      video.src = videoSrc;
      video.controls = true;
      video.autoplay = true;
      video.playsInline = true;
      video.preload = "auto";
      stage.appendChild(video);
    }

    popup.classList.add("is-open");
    popup.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";
    close.focus();
  };

  const closePopup = () => {
    if (!popup.classList.contains("is-open")) return;
    popup.classList.remove("is-open");
    popup.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";

    /* Elemen video dihapus supaya suaranya benar-benar berhenti —
       menyembunyikan popup saja tidak menghentikan pemutaran. */
    stage.replaceChildren();

    if (lastFocus) lastFocus.focus();
  };

  frame.addEventListener("click", openPopup);
  close.addEventListener("click", closePopup);

  popup.addEventListener("click", (event) => {
    if (event.target === popup) closePopup();
  });

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") closePopup();
  });
});

/* =========================================================
   Blok 场地 (The Venues) — tempel di script.js.

   Perbaikan dari versi lama:

   1. onclick="selectVenue(...)" dihapus. Fungsi global di halaman
      berisi banyak section mudah bertabrakan nama.

   2. Header accordion diubah dari <div onclick> jadi <button>,
      sehingga bisa dibuka dengan keyboard (Tab + Enter).

   3. max-height dihitung dari scrollHeight, bukan angka tetap 500px.
      Angka tetap berisiko memotong isi kalau teksnya bertambah.

   4. Pembacaan #hash dipindah dari event 'load' ke DOMContentLoaded.
      'load' menunggu SEMUA gambar selesai — di koneksi lambat, tamu
      yang datang dari peta harus menunggu lama sebelum accordion
      yang benar terbuka.
   ========================================================= */

document.addEventListener("DOMContentLoaded", () => {
  const section = document.querySelector(".pala-vn");
  if (!section) return;

  const items = Array.from(section.querySelectorAll(".pala-vn__item"));
  const images = Array.from(section.querySelectorAll(".pala-vn__image"));
  const counter = section.querySelector("[data-vn-counter]");
  if (!items.length) return;

  const total = String(items.length).padStart(2, "0");

  const select = (index, scroll) => {
    items.forEach((item, i) => {
      const active = i === index;
      const head = item.querySelector(".pala-vn__head");
      const content = item.querySelector(".pala-vn__content");

      item.classList.toggle("is-active", active);
      if (head) head.setAttribute("aria-expanded", String(active));
      if (content) {
        // Dihitung dari isinya sendiri, bukan angka tetap
        content.style.maxHeight = active ? content.scrollHeight + "px" : "0px";
      }
    });

    images.forEach((img, i) => img.classList.toggle("is-active", i === index));

    if (counter) {
      counter.textContent = String(index + 1).padStart(2, "0") + " / " + total;
    }

    if (scroll) {
      items[index].scrollIntoView({ behavior: "smooth", block: "center" });
    }
  };

  items.forEach((item, index) => {
    const head = item.querySelector(".pala-vn__head");
    if (!head) return;
    head.addEventListener("click", () => select(index, false));
  });

  /* Buka otomatis kalau halaman dibuka dengan #anchor,
     misalnya dari titik di peta masterplan */
  const hash = window.location.hash.replace("#", "");
  const fromHash = hash ? items.findIndex((item) => item.id === hash) : -1;

  select(fromHash >= 0 ? fromHash : 0, false);

  if (fromHash >= 0) {
    setTimeout(() => select(fromHash, true), 220);
  }

  /* Tinggi dihitung ulang saat lebar berubah — teks bisa berganti
     jumlah baris dan isinya jadi terpotong */
  let resizeTimer;
  window.addEventListener("resize", () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      const active = items.findIndex((item) => item.classList.contains("is-active"));
      if (active >= 0) select(active, false);
    }, 150);
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const modal = document.querySelector(".pala-mo");
  if (!modal) return;

  const overlay = modal.querySelector("[data-mo-overlay]");
  const box = modal.querySelector("[data-mo-box]");
  const closeBtn = modal.querySelector("[data-mo-close]");
  const form = modal.querySelector("[data-mo-form]");
  const formWrap = modal.querySelector("[data-mo-formwrap]");
  const success = modal.querySelector("[data-mo-success]");
  const successBtn = modal.querySelector("[data-mo-successbtn]");
  const submit = modal.querySelector("[data-mo-submit]");
  const notice = modal.querySelector("[data-mo-notice]");
  const openers = document.querySelectorAll("[data-mo-open]");
  if (!overlay || !form || !submit) return;

  const ENDPOINT = "send-inquiry.php";
  const FALLBACK_EMAIL = "enquiry@thepalaubudresort.com";
  let lastFocus = null;

  /* ---------- Tanggal paling awal = hari ini ---------- */
  const dateInput = form.querySelector("#pala-mo-date");
  if (dateInput) {
    const today = new Date();
    const pad = (n) => String(n).padStart(2, "0");
    dateInput.min = `${today.getFullYear()}-${pad(today.getMonth() + 1)}-${pad(today.getDate())}`;
  }

  /* ---------- Telepon: hanya angka, spasi, dan + ---------- */
  const phoneInput = form.querySelector("#pala-mo-phone");
  if (phoneInput) {
    phoneInput.addEventListener("input", function () {
      this.value = this.value.replace(/[^0-9+\s-]/g, "");
    });
  }

  /* ---------- Buka & tutup ---------- */
  const openModal = (event) => {
    if (event) event.preventDefault();
    lastFocus = document.activeElement;
    modal.classList.add("is-open");
    modal.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";
    const first = form.querySelector("select, input");
    if (first) first.focus();
  };

  const closeModal = () => {
    if (!modal.classList.contains("is-open")) return;
    modal.classList.remove("is-open");
    modal.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
    if (lastFocus) lastFocus.focus();
  };

  openers.forEach((btn) => btn.addEventListener("click", openModal));
  if (closeBtn) closeBtn.addEventListener("click", closeModal);

  overlay.addEventListener("click", (event) => {
    if (event.target === overlay) closeModal();
  });

  /* ---------- Keyboard: Esc menutup, Tab tetap di dalam modal ---------- */
  document.addEventListener("keydown", (event) => {
    if (!modal.classList.contains("is-open")) return;

    if (event.key === "Escape") {
      closeModal();
      return;
    }

    if (event.key !== "Tab") return;

    const focusable = box.querySelectorAll(
      'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
    );
    const list = Array.from(focusable).filter((el) => !el.disabled && el.offsetParent !== null);
    if (!list.length) return;

    const first = list[0];
    const last = list[list.length - 1];

    if (event.shiftKey && document.activeElement === first) {
      event.preventDefault();
      last.focus();
    } else if (!event.shiftKey && document.activeElement === last) {
      event.preventDefault();
      first.focus();
    }
  });

  /* ---------- Penanda kesalahan per kolom ---------- */
  const showError = (input, message) => {
    const group = input.closest(".pala-mo__group");
    if (!group) return;
    clearError(input);
    group.classList.add("has-error");
    const el = document.createElement("p");
    el.className = "pala-mo__error";
    el.textContent = message;
    group.appendChild(el);
  };

  const clearError = (input) => {
    const group = input.closest(".pala-mo__group");
    if (!group) return;
    group.classList.remove("has-error");
    const el = group.querySelector(".pala-mo__error");
    if (el) el.remove();
  };

  const clearAllErrors = () => {
    form.querySelectorAll(".pala-mo__group").forEach((g) => g.classList.remove("has-error"));
    form.querySelectorAll(".pala-mo__error").forEach((e) => e.remove());
    if (notice) notice.hidden = true;
  };

  const showNotice = (message) => {
    if (!notice) return;
    notice.textContent = message;
    notice.hidden = false;
    notice.scrollIntoView({ behavior: "smooth", block: "nearest" });
  };

  /* ---------- Validasi di browser ----------
     Hanya untuk kenyamanan. Validasi sebenarnya ada di
     send-inquiry.php, karena siapa pun bisa melewati yang ini. */
  const validate = () => {
    const f = form.elements;
    let ok = true;

    const check = (input, condition, message) => {
      if (!condition) {
        showError(input, message);
        ok = false;
      }
    };

    check(f.event, f.event.value !== "", "请选择活动类型");
    // Panjang dihitung dengan Array.from supaya aksara Han dihitung
    // sebagai satu karakter, bukan per unit UTF-16
    check(f.name, Array.from(f.name.value.trim()).length >= 2, "请填写您的姓名");
    check(f.phone, f.phone.value.trim().replace(/\D/g, "").length >= 7, "请填写有效的联系电话");
    check(f.email, /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(f.email.value.trim()), "请填写有效的邮箱地址");
    check(f.date, f.date.value !== "", "请选择意向日期");
    check(f.guests, Number(f.guests.value) >= 10 && Number(f.guests.value) <= 500, "人数请填写 10 至 500 之间");
    check(f.notes, Array.from(f.notes.value.trim()).length >= 5, "请简单描述您的活动");

    return ok;
  };

  /* ---------- Kirim ---------- */
  form.addEventListener("submit", async (event) => {
    event.preventDefault();
    clearAllErrors();

    if (!validate()) {
      const firstError = form.querySelector(".pala-mo__group.has-error");
      if (firstError) firstError.scrollIntoView({ behavior: "smooth", block: "center" });
      return;
    }

    submit.classList.add("is-loading");
    submit.disabled = true;

    try {
      const response = await fetch(ENDPOINT, {
        method: "POST",
        body: new FormData(form),
      });

      const data = await response.json().catch(() => ({}));

      if (!response.ok || !data.ok) {
        if (data.errors) {
          Object.entries(data.errors).forEach(([key, message]) => {
            const input = form.elements[key];
            if (input) showError(input, message);
          });
          showNotice("请检查上方标红的项目。");
        } else {
          showNotice(data.message || `发送失败，请直接发送邮件至 ${FALLBACK_EMAIL}`);
        }
        return;
      }

      /* Berhasil — langsung tampilkan, tanpa jeda buatan */
      if (formWrap) formWrap.style.display = "none";
      if (success) success.classList.add("is-active");
      if (box) box.scrollTop = 0;
      if (successBtn) successBtn.focus();
    } catch (error) {
      showNotice(`网络连接失败，请稍后重试，或直接发送邮件至 ${FALLBACK_EMAIL}`);
    } finally {
      submit.classList.remove("is-loading");
      submit.disabled = false;
    }
  });

  /* ---------- Tombol pada layar berhasil ---------- */
  if (successBtn) {
    successBtn.addEventListener("click", () => {
      closeModal();
      /* Ditunda sampai animasi tutup selesai supaya tamu tidak
         sempat melihat formulir kosong berkedip */
      setTimeout(() => {
        form.reset();
        clearAllErrors();
        if (success) success.classList.remove("is-active");
        if (formWrap) formWrap.style.display = "";
      }, 400);
    });
  }
});

document.addEventListener("DOMContentLoaded", () => {
  const heroes = document.querySelectorAll("[data-hero-parallax]");
  if (!heroes.length) return;

  // Hormati preferensi sistem: tanpa gerakan, foto dibiarkan diam
  if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) return;

  const FACTOR = 0.07;

  heroes.forEach((hero) => {
    const bg = hero.querySelector("img");
    if (!bg) return;

    let ticking = false;
    let inView = true;

    const apply = () => {
      const maxShift = hero.offsetHeight * 0.08;   // ruang dari height:116%
      const shift = Math.min(window.scrollY * FACTOR, maxShift);
      bg.style.transform = "translate3d(0," + shift.toFixed(1) + "px,0)";
    };

    const onScroll = () => {
      if (ticking || !inView) return;
      ticking = true;
      requestAnimationFrame(() => {
        apply();
        ticking = false;
      });
    };

    // Berhenti menghitung setelah hero keluar layar
    if ("IntersectionObserver" in window) {
      const observer = new IntersectionObserver(
        (entries) => { inView = entries[0].isIntersecting; },
        { threshold: 0 }
      );
      observer.observe(hero);
    }

    window.addEventListener("scroll", onScroll, { passive: true });
    window.addEventListener("resize", apply);
    apply();
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const root = document.querySelector(".pala-menu");
  if (!root) return;

  const book = root.querySelector("[data-menu-book]");
  const info = root.querySelector("[data-menu-info]");
  const prev = root.querySelector("[data-menu-prev]");
  const next = root.querySelector("[data-menu-next]");
  if (!book) return;

  /* Daftar halaman dari atribut, dipisah koma atau baris baru */
  const pages = (root.dataset.pages || "")
    .split(/[\n,]+/)
    .map((s) => s.trim())
    .filter(Boolean);

  if (!pages.length) return;

  const base = (root.dataset.base || "").trim();
  const total = pages.length;
  const totalLeaves = Math.ceil(total / 2);

  let current = 0;
  let busy = false;
  const leaves = [];

  /* ---------- Suara balik halaman (tanpa berkas audio) ---------- */
  let audioCtx = null;
  const flipSound = () => {
    try {
      const Ctx = window.AudioContext || window.webkitAudioContext;
      if (!Ctx) return;
      if (!audioCtx) audioCtx = new Ctx();
      const dur = 0.18;
      const buffer = audioCtx.createBuffer(1, audioCtx.sampleRate * dur, audioCtx.sampleRate);
      const data = buffer.getChannelData(0);
      for (let i = 0; i < data.length; i += 1) {
        const t = i / data.length;
        data[i] = (Math.random() * 2 - 1) * Math.pow(1 - t, 3) * 0.25;
      }
      const src = audioCtx.createBufferSource();
      src.buffer = buffer;
      const hp = audioCtx.createBiquadFilter();
      hp.type = "highpass";
      hp.frequency.value = 1200;
      src.connect(hp);
      hp.connect(audioCtx.destination);
      src.start();
    } catch (_) { /* diabaikan */ }
  };

  /* ---------- Susun lembar ---------- */
  const makeFace = (side, index) => {
    const face = document.createElement("div");
    face.className = "pala-menu__face pala-menu__face--" + side;

    if (index < total) {
      const img = document.createElement("img");
      img.alt = "菜单第 " + (index + 1) + " 页";
      img.decoding = "async";
      img.dataset.src = base + pages[index];   // src dipasang belakangan
      face.appendChild(img);
    } else {
      face.classList.add("pala-menu__face--blank");
    }

    face.insertAdjacentHTML("beforeend", '<span class="pala-menu__gloss"></span>');
    return face;
  };

  for (let i = 0; i < totalLeaves; i += 1) {
    const leaf = document.createElement("div");
    leaf.className = "pala-menu__leaf";
    leaf.appendChild(makeFace("front", i * 2));
    leaf.appendChild(makeFace("back", i * 2 + 1));

    leaf.addEventListener("click", () => {
      if (i === current) go(1);
      else if (i === current - 1) go(-1);
    });

    leaves.push(leaf);
    book.appendChild(leaf);
  }

  /* ---------- Muat gambar di sekitar lembar aktif ---------- */
  const loadNearby = () => {
    for (let i = current - 1; i <= current + 1; i += 1) {
      const leaf = leaves[i];
      if (!leaf) continue;
      leaf.querySelectorAll("img[data-src]").forEach((img) => {
        img.src = img.dataset.src;
        delete img.dataset.src;
      });
    }
  };

  /* ---------- Perbarui tampilan ---------- */
  const paint = (turnIndex) => {
    leaves.forEach((leaf, i) => {
      const flipped = i < current;
      leaf.classList.toggle("is-flipped", flipped);
      leaf.style.zIndex = flipped ? i : totalLeaves - i;
    });

    book.classList.toggle("at-start", current === 0);
    book.classList.toggle("at-end", current === totalLeaves);

    if (info) {
      if (current === 0) info.textContent = "封面";
      else if (current === totalLeaves) info.textContent = "完";
      else {
        const left = current * 2;
        const right = left + 1;
        info.textContent = right <= total ? left + "–" + right : String(left);
      }
    }

    if (prev) prev.disabled = current === 0;
    if (next) next.disabled = current === totalLeaves;

    if (typeof turnIndex === "number" && leaves[turnIndex]) {
      const el = leaves[turnIndex];
      el.classList.add("is-turning");
      setTimeout(() => el.classList.remove("is-turning"), 850);
    }

    loadNearby();
  };

  function go(direction) {
    if (busy) return;
    if (direction > 0 && current < totalLeaves) {
      busy = true;
      const turned = current;
      current += 1;
      flipSound();
      paint(turned);
    } else if (direction < 0 && current > 0) {
      busy = true;
      current -= 1;
      flipSound();
      paint(current);
    } else {
      return;
    }
    setTimeout(() => { busy = false; }, 870);
  }

  /* ---------- Kontrol ---------- */
  if (prev) prev.addEventListener("click", () => go(-1));
  if (next) next.addEventListener("click", () => go(1));

  /* Panah kiri/kanan hanya saat section ini difokus —
     versi lama memasangnya di document, sehingga menekan panah
     di bagian lain halaman ikut membalik menu. */
  root.addEventListener("keydown", (event) => {
    if (event.key === "ArrowRight") { event.preventDefault(); go(1); }
    if (event.key === "ArrowLeft")  { event.preventDefault(); go(-1); }
  });

  let startX = 0;
  book.addEventListener("touchstart", (e) => { startX = e.touches[0].clientX; }, { passive: true });
  book.addEventListener("touchend", (e) => {
    const dx = e.changedTouches[0].clientX - startX;
    if (Math.abs(dx) > 40) go(dx < 0 ? 1 : -1);
  }, { passive: true });

  paint();
});

/* =========================================================
   Blok galeri + lightbox — tempel di script.js.

   Perbaikan dari versi Elementor:

   1. Lightbox membuka versi BESAR gambar, bukan thumbnail.
      Versi lama menyalin src thumbnail apa adanya, jadi gambar
      yang dibuka penuh layar tetap resolusi kartu — terlihat buram.
      Sekarang jalur versi besar dibaca dari data-full.

   2. Tombol panah dan tutup jadi <button>, bukan <span>.
      Versi lama tidak bisa diakses keyboard sama sekali.

   3. Ditambah tutup dengan Esc, geser jari, dan penguncian scroll
      di belakang lightbox.

   4. Fokus dikembalikan ke gambar yang tadi diklik saat ditutup.
   ========================================================= */

document.addEventListener("DOMContentLoaded", () => {
  const gallery = document.querySelector(".pala-gal");
  if (!gallery) return;

  const items = Array.from(gallery.querySelectorAll(".pala-gal__item"));
  const box = gallery.querySelector("[data-gal-box]");
  const boxImg = gallery.querySelector("[data-gal-img]");
  const counter = gallery.querySelector("[data-gal-counter]");
  const closeBtn = gallery.querySelector("[data-gal-close]");
  const prevBtn = gallery.querySelector("[data-gal-prev]");
  const nextBtn = gallery.querySelector("[data-gal-next]");
  if (!items.length || !box || !boxImg) return;

  let index = 0;
  let lastFocus = null;

  const show = (i) => {
    index = (i + items.length) % items.length;
    const thumb = items[index].querySelector("img");
    if (!thumb) return;

    // Versi besar kalau ada; kalau tidak, pakai gambar kartunya
    boxImg.src = items[index].dataset.full || thumb.currentSrc || thumb.src;
    boxImg.alt = thumb.alt || "";

    if (counter) counter.textContent = index + 1 + " / " + items.length;
  };

  const openBox = (i) => {
    lastFocus = document.activeElement;
    show(i);
    box.classList.add("is-open");
    box.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";
    if (closeBtn) closeBtn.focus();
  };

  const closeBox = () => {
    if (!box.classList.contains("is-open")) return;
    box.classList.remove("is-open");
    box.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
    // Dikosongkan supaya gambar besar tidak menahan memori
    setTimeout(() => { if (!box.classList.contains("is-open")) boxImg.removeAttribute("src"); }, 320);
    if (lastFocus) lastFocus.focus();
  };

  items.forEach((item, i) => item.addEventListener("click", () => openBox(i)));

  if (closeBtn) closeBtn.addEventListener("click", closeBox);
  if (prevBtn) prevBtn.addEventListener("click", (e) => { e.stopPropagation(); show(index - 1); });
  if (nextBtn) nextBtn.addEventListener("click", (e) => { e.stopPropagation(); show(index + 1); });

  box.addEventListener("click", (event) => {
    if (event.target === box) closeBox();
  });

  document.addEventListener("keydown", (event) => {
    if (!box.classList.contains("is-open")) return;
    if (event.key === "Escape") closeBox();
    if (event.key === "ArrowRight") show(index + 1);
    if (event.key === "ArrowLeft") show(index - 1);
  });

  /* Geser jari untuk berpindah gambar */
  let startX = 0;
  box.addEventListener("touchstart", (e) => { startX = e.touches[0].clientX; }, { passive: true });
  box.addEventListener("touchend", (e) => {
    const dx = e.changedTouches[0].clientX - startX;
    if (Math.abs(dx) > 45) show(dx < 0 ? index + 1 : index - 1);
  }, { passive: true });
});

/* =========================================================
   Blok kalender iklim — tempel di script.js.

   Perbedaan terbesar dari versi Elementor:

   Isi 12 bulan tidak lagi disimpan di dalam array JavaScript.
   Di versi lama, seluruh teks — deskripsi iklim, saran menginap,
   nama festival — hanya ada di dalam `const months = [...]`, jadi
   TIDAK SATU KALIMAT PUN terbaca Baiduspider. Padahal ini konten
   paling bernilai di halaman: panduan bulan demi bulan tentang
   kapan datang ke Bali.

   Sekarang isinya ditulis di HTML (tersembunyi lewat CSS), dan
   file ini hanya memindahkannya ke panel saat bulan diklik.

   Perbaikan lain:
   - <div> onclick jadi <button>, bisa dipilih dengan keyboard
   - max-height panel dihitung dari isinya, bukan tetap 700px
   ========================================================= */

document.addEventListener("DOMContentLoaded", () => {
  const cal = document.querySelector(".pala-cal");
  if (!cal) return;

  const months = Array.from(cal.querySelectorAll(".pala-cal__month"));
  const panel = cal.querySelector("[data-cal-panel]");
  const nameEl = cal.querySelector("[data-cal-name]");
  const tagEl = cal.querySelector("[data-cal-tag]");
  const climateEl = cal.querySelector("[data-cal-climate]");
  const palaEl = cal.querySelector("[data-cal-pala]");
  const festEl = cal.querySelector("[data-cal-festival]");
  const festText = cal.querySelector("[data-cal-festival-text]");
  if (!months.length || !panel) return;

  /* Warna per jenis bulan */
  const TAG_COLOR = {
    wet: "#287233",
    sweet: "#d4bc8c",
    peak: "#2a2520",
    festival: "#2a2520",
  };

  let activeIndex = null;

  const closePanel = () => {
    panel.style.maxHeight = "0px";
    months.forEach((m) => {
      m.classList.remove("is-active");
      m.setAttribute("aria-expanded", "false");
    });
    activeIndex = null;
  };

  const openPanel = (index) => {
    const button = months[index];
    const source = cal.querySelector("#" + button.dataset.calSource);
    if (!source) return;

    months.forEach((m) => {
      m.classList.remove("is-active");
      m.setAttribute("aria-expanded", "false");
    });
    button.classList.add("is-active");
    button.setAttribute("aria-expanded", "true");
    activeIndex = index;

    const type = button.dataset.calType || "wet";
    const color = TAG_COLOR[type] || "#2a2520";

    nameEl.textContent = source.dataset.name || "";

    tagEl.textContent = source.dataset.tag || "";
    tagEl.style.background = color + "22";
    tagEl.style.color = color;
    tagEl.style.border = "1px solid " + color + "55";

    const climate = source.querySelector("[data-climate]");
    const pala = source.querySelector("[data-pala]");
    const festival = source.querySelector("[data-festival]");

    climateEl.textContent = climate ? climate.textContent.trim() : "";
    palaEl.textContent = pala ? pala.textContent.trim() : "";

    if (festival && festText) {
      festText.textContent = festival.textContent.trim();
      festEl.hidden = false;
    } else if (festEl) {
      festEl.hidden = true;
    }

    /* Tinggi dihitung dari isinya. Versi lama memakai 700px tetap,
       yang bisa memotong teks atau menyisakan ruang kosong. */
    const inner = panel.firstElementChild;
    panel.style.maxHeight = (inner ? inner.scrollHeight : 700) + "px";
  };

  months.forEach((button, index) => {
    button.setAttribute("aria-expanded", "false");
    button.addEventListener("click", () => {
      if (activeIndex === index) closePanel();
      else openPanel(index);
    });
  });

  /* Tinggi dihitung ulang saat lebar berubah — jumlah baris teks
     berubah dan panel bisa terpotong */
  let resizeTimer;
  window.addEventListener("resize", () => {
    if (activeIndex === null) return;
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => openPanel(activeIndex), 150);
  });
});

/* =========================================================
   Blok kalender festival — tempel di script.js.

   Perbaikan dari versi Elementor:

   1. <div> onclick jadi <button> — versi lama memasang listener
      pada seluruh .fest-block, jadi mengklik TEKS di dalam panel
      yang sudah terbuka ikut menutupnya. Termasuk saat tamu
      menyeret untuk menyeleksi teks. Sekarang hanya bagian
      foto/judul yang bisa diklik.

   2. max-height dihitung dari isinya, bukan tetap 800px.

   3. Panel yang sedang terbuka dihitung ulang saat lebar berubah.
   ========================================================= */

document.addEventListener("DOMContentLoaded", () => {
  const section = document.querySelector(".pala-fest");
  if (!section) return;

  const blocks = Array.from(section.querySelectorAll(".pala-fest__block"));
  if (!blocks.length) return;

  const setHeight = (block, open) => {
    const text = block.querySelector(".pala-fest__text");
    if (!text) return;
    const inner = text.firstElementChild;
    text.style.maxHeight = open && inner ? inner.scrollHeight + "px" : "0px";
  };

  const closeAll = () => {
    blocks.forEach((block) => {
      block.classList.remove("is-open");
      setHeight(block, false);
      const head = block.querySelector(".pala-fest__head");
      if (head) head.setAttribute("aria-expanded", "false");
    });
  };

  blocks.forEach((block) => {
    const head = block.querySelector(".pala-fest__head");
    if (!head) return;

    head.setAttribute("aria-expanded", "false");

    head.addEventListener("click", () => {
      const wasOpen = block.classList.contains("is-open");
      closeAll();
      if (wasOpen) return;

      block.classList.add("is-open");
      head.setAttribute("aria-expanded", "true");
      setHeight(block, true);
    });
  });

  /* Tinggi dihitung ulang saat lebar berubah — jumlah baris teks
     berubah dan isinya bisa terpotong */
  let resizeTimer;
  window.addEventListener("resize", () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      const open = blocks.find((b) => b.classList.contains("is-open"));
      if (open) setHeight(open, true);
    }, 150);
  });
});