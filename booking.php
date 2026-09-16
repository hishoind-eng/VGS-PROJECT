<?php include('include/header.php'); ?>
<style>
    /* =====================================================================
       SALON BOOKING PAGE — SELF-CONTAINED DESIGN SYSTEM
       Mobile-first. Every rule below is scoped to .sbk-page so it can never
       leak into (or be broken by) the rest of the site's stylesheet.
    ===================================================================== */

    html,
    body {
        overflow-x: hidden;
        max-width: 100%;
    }

    .sbk-page,
    .sbk-page *,
    .sbk-page *::before,
    .sbk-page *::after {
        box-sizing: border-box;
    }

    .sbk-page {
        --sbk-emerald: var(--c-emerald, #0f8b5f);
        --sbk-emerald-deep: var(--c-emerald-deep, #0b6b48);
        --sbk-emerald-bright: var(--c-emerald-bright, rgba(15, 139, 95, .14));
        --sbk-ink: var(--black, #14171a);
        --sbk-white: var(--white, #ffffff);
        --sbk-gold: #c9973a;
        --sbk-muted: #6b706b;
        --sbk-bg-soft: #f6f7f5;
        --sbk-border: #e4e7e2;
        --sbk-danger: #b3261e;
        --sbk-danger-bg: #fbe9e7;
        --sbk-radius-sm: var(--radius-sm, 10px);
        --sbk-radius-md: var(--radius-md, 16px);
        --sbk-radius-lg: var(--radius-lg, 22px);
        --sbk-shadow: var(--shadow-card, 0 14px 34px -18px rgba(20, 23, 26, .28));
        --sbk-ease: var(--vg-ease, cubic-bezier(.4, 0, .2, 1));
        --sbk-font-head: var(--font-head, 'Playfair Display', Georgia, serif);
        --sbk-pad-x: clamp(14px, 5vw, 32px);
        --sbk-gap: clamp(14px, 3.5vw, 32px);
        overflow-x: hidden;
        width: 100%;
        color: var(--sbk-ink);
    }

    .sbk-container {
        width: 100%;
        max-width: 1220px;
        margin-inline: auto;
        padding-inline: var(--sbk-pad-x);
    }

    .sbk-page img {
        max-width: 100%;
        height: auto;
        display: block;
    }

    .sbk-page a {
        text-decoration: none;
    }

    .sbk-page button {
        font-family: inherit;
    }

    /* ---------- Section heads ---------- */
    .sbk-eyebrow {
        display: inline-block;
        font-size: clamp(.72rem, 2vw, .8rem);
        font-weight: 700;
        letter-spacing: .12em;
        text-transform: uppercase;
        color: var(--sbk-gold);
        margin: 0 0 10px;
    }

    .sbk-section-title {
        font-family: var(--sbk-font-head);
        font-size: clamp(1.5rem, 4.6vw, 2.4rem);
        line-height: 1.2;
        font-weight: 600;
        margin: 0 0 12px;
        word-break: break-word;
    }

    .sbk-section-sub {
        font-size: clamp(.92rem, 2.4vw, 1.02rem);
        color: var(--sbk-muted);
        max-width: 620px;
        margin: 0 auto;
    }

    .sbk-section-head {
        text-align: center;
        margin: 0 auto clamp(28px, 6vw, 52px);
        max-width: 100%;
    }

    .sbk-section {
        padding: clamp(40px, 8vw, 90px) 0;
        overflow-x: hidden;
    }

    .sbk-section-alt {
        background: var(--sbk-bg-soft);
    }

    /* =====================================================================
       HERO
    ===================================================================== */
    .sbk-hero {
        position: relative;
        padding: clamp(64px, 18vw, 140px) 0 clamp(40px, 10vw, 80px);
        background: linear-gradient(rgba(10, 12, 10, .72), rgba(10, 12, 10, .72)),
            url('assets/img/booking/booking-header.jpeg') center/cover no-repeat;
        color: var(--sbk-white);
        text-align: center;
        overflow-x: hidden;
    }

    .sbk-hero-tag {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: clamp(.68rem, 2vw, .78rem);
        font-weight: 700;
        letter-spacing: .14em;
        text-transform: uppercase;
        color: var(--sbk-white);
        background: rgba(255, 255, 255, .12);
        border: 1px solid rgba(255, 255, 255, .3);
        padding: 8px 16px;
        border-radius: 100px;
        margin-bottom: 18px;
        max-width: 100%;
    }

    .sbk-hero h1 {
        font-family: var(--sbk-font-head);
        font-size: clamp(1.6rem, 6vw, 3.1rem);
        line-height: 1.18;
        font-weight: 600;
        margin: 0 auto 14px;
        max-width: 760px;
        padding-inline: 8px;
    }

    .sbk-hero p {
        font-size: clamp(.88rem, 2.4vw, 1.05rem);
        color: rgba(255, 255, 255, .82);
        max-width: 560px;
        margin: 0 auto;
        padding-inline: 8px;
    }

    .sbk-hero-chips {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
        margin-top: 26px;
        padding-inline: var(--sbk-pad-x);
    }

    .sbk-hero-chip {
        display: flex;
        align-items: center;
        gap: 8px;
        background: rgba(255, 255, 255, .1);
        border: 1px solid rgba(255, 255, 255, .22);
        color: var(--sbk-white);
        font-size: .82rem;
        font-weight: 600;
        padding: 9px 14px;
        border-radius: 100px;
        white-space: nowrap;
    }

    .sbk-hero-chip i {
        color: var(--sbk-emerald);
        font-size: .95rem;
    }

    /* =====================================================================
       PROGRESS STEPS
    ===================================================================== */
    .sbk-progress {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 4px;
        padding: 18px var(--sbk-pad-x) 0;
        max-width: 1220px;
        margin: 0 auto;
        overflow-x: hidden;
    }

    .sbk-progress-step {
        flex: 1 1 0;
        min-width: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        position: relative;
    }

    .sbk-progress-step::before {
        content: "";
        position: absolute;
        top: 15px;
        left: -50%;
        width: 100%;
        height: 2px;
        background: var(--sbk-border);
        z-index: 0;
    }

    .sbk-progress-step:first-child::before {
        display: none;
    }

    .sbk-progress-num {
        position: relative;
        z-index: 1;
        width: 30px;
        height: 30px;
        flex: 0 0 auto;
        border-radius: 50%;
        background: var(--sbk-white);
        border: 2px solid var(--sbk-border);
        color: var(--sbk-muted);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: .82rem;
        font-weight: 700;
        transition: all .3s var(--sbk-ease);
    }

    .sbk-progress-label {
        margin-top: 8px;
        font-size: clamp(.62rem, 2vw, .78rem);
        font-weight: 700;
        color: var(--sbk-muted);
        letter-spacing: .02em;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 100%;
        padding-inline: 2px;
    }

    .sbk-progress-step.is-active .sbk-progress-num,
    .sbk-progress-step.is-done .sbk-progress-num {
        background: var(--sbk-emerald);
        border-color: var(--sbk-emerald);
        color: var(--sbk-white);
    }

    .sbk-progress-step.is-active .sbk-progress-label,
    .sbk-progress-step.is-done .sbk-progress-label {
        color: var(--sbk-ink);
    }

    .sbk-progress-step.is-done::before,
    .sbk-progress-step.is-active::before {
        background: var(--sbk-emerald);
    }

    @media (max-width: 400px) {
        .sbk-progress-label {
            display: none;
        }

        .sbk-progress-num {
            width: 26px;
            height: 26px;
            font-size: .74rem;
        }
    }

    /* =====================================================================
       SERVICES
    ===================================================================== */
    .sbk-services-grid {
        display: flex;
        flex-wrap: wrap;
        gap: var(--sbk-gap);
    }

    .sbk-service-card {
        flex: 1 1 100%;
        max-width: 100%;
        position: relative;
        display: flex;
        flex-direction: column;
        gap: 14px;
        text-align: left;
        background: var(--sbk-white);
        border: 1.5px solid var(--sbk-border);
        border-radius: var(--sbk-radius-md);
        padding: clamp(18px, 4vw, 26px);
        cursor: pointer;
        box-shadow: var(--sbk-shadow);
        transition: border-color .25s var(--sbk-ease), transform .25s var(--sbk-ease), box-shadow .25s var(--sbk-ease);
        width: 100%;
    }

    @media (min-width: 576px) {
        .sbk-service-card {
            flex-basis: calc(50% - var(--sbk-gap) / 2);
        }
    }

    @media (min-width: 992px) {
        .sbk-service-card {
            flex-basis: calc(33.333% - (var(--sbk-gap) * 2 / 3));
        }
    }

    .sbk-service-card:hover {
        transform: translateY(-4px);
        border-color: var(--sbk-emerald);
    }

    .sbk-service-card.is-selected {
        border-color: var(--sbk-emerald);
        box-shadow: 0 0 0 3px var(--sbk-emerald-bright), var(--sbk-shadow);
        background: var(--sbk-emerald-bright);
    }

    .sbk-service-badge {
        position: absolute;
        top: 14px;
        right: 14px;
        background: var(--sbk-gold);
        color: var(--sbk-white);
        font-size: .64rem;
        font-weight: 800;
        letter-spacing: .06em;
        text-transform: uppercase;
        padding: 5px 10px;
        border-radius: 100px;
    }

    .sbk-service-icon {
        width: 48px;
        height: 48px;
        flex: 0 0 auto;
        border-radius: 12px;
        background: var(--sbk-emerald-bright);
        color: var(--sbk-emerald-deep);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
    }

    .sbk-service-name {
        font-size: 1.06rem;
        font-weight: 700;
        margin: 0;
        word-break: break-word;
    }

    .sbk-service-desc {
        font-size: .86rem;
        color: var(--sbk-muted);
        margin: 0;
        line-height: 1.5;
    }

    .sbk-service-meta {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
        margin-top: auto;
        padding-top: 12px;
        border-top: 1px solid var(--sbk-border);
        flex-wrap: wrap;
    }

    .sbk-service-duration {
        font-size: .8rem;
        font-weight: 600;
        color: var(--sbk-muted);
        display: flex;
        align-items: center;
        gap: 6px;
        white-space: nowrap;
    }

    .sbk-service-price {
        font-size: 1.15rem;
        font-weight: 700;
        color: var(--sbk-emerald-deep);
        white-space: nowrap;
    }

    .sbk-service-radio {
        position: absolute;
        top: 16px;
        left: 16px;
        width: 22px;
        height: 22px;
        border-radius: 50%;
        border: 2px solid var(--sbk-border);
        background: var(--sbk-white);
        display: flex;
        align-items: center;
        justify-content: center;
        color: transparent;
        font-size: .68rem;
        transition: all .25s var(--sbk-ease);
    }

    .sbk-service-card.is-selected .sbk-service-radio {
        background: var(--sbk-emerald);
        border-color: var(--sbk-emerald);
        color: var(--sbk-white);
    }

    .sbk-service-card {
        padding-left: clamp(20px, 4vw, 26px);
    }

    .sbk-service-card .sbk-service-radio {
        top: 18px;
        right: 18px;
        left: auto;
    }

    /* =====================================================================
       DATE & TIME
    ===================================================================== */
    .sbk-datetime-grid {
        display: flex;
        flex-wrap: wrap;
        gap: clamp(30px, 6vw, 48px);
        align-items: flex-start;
    }

    .sbk-datetime-col {
        flex: 1 1 100%;
        min-width: 0;
        max-width: 100%;
    }

    @media (min-width: 992px) {
        .sbk-datetime-col {
            flex-basis: calc(50% - 24px);
        }
    }

    .sbk-col-title {
        font-size: clamp(1rem, 3vw, 1.2rem);
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 0 0 18px;
    }

    .sbk-col-title i {
        color: var(--sbk-emerald);
    }

    .sbk-date-scroller {
        display: flex;
        gap: 12px;
        overflow-x: auto;
        overflow-y: hidden;
        padding-bottom: 10px;
        max-width: 100%;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: thin;
    }

    .sbk-date-card {
        flex: 0 0 auto;
        width: 70px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 4px;
        padding: 16px 0 14px;
        border-radius: var(--sbk-radius-md);
        background: var(--sbk-white);
        border: 1.5px solid var(--sbk-border);
        cursor: pointer;
        box-shadow: var(--sbk-shadow);
        transition: all .25s var(--sbk-ease);
        position: relative;
    }

    .sbk-date-card:hover {
        transform: translateY(-3px);
        border-color: var(--sbk-emerald);
    }

    .sbk-date-day,
    .sbk-date-month {
        font-size: .66rem;
        font-weight: 700;
        color: var(--sbk-muted);
        letter-spacing: .05em;
    }

    .sbk-date-num {
        font-size: 1.4rem;
        font-weight: 700;
    }

    .sbk-date-check {
        position: absolute;
        top: -7px;
        right: -7px;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: var(--sbk-white);
        color: var(--sbk-emerald);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: .64rem;
        opacity: 0;
        transform: scale(.5);
        transition: all .25s var(--sbk-ease);
        box-shadow: 0 4px 10px rgba(0, 0, 0, .18);
    }

    .sbk-date-card.is-selected {
        background: var(--sbk-emerald);
        border-color: var(--sbk-emerald);
        transform: scale(1.03);
    }

    .sbk-date-card.is-selected .sbk-date-day,
    .sbk-date-card.is-selected .sbk-date-num,
    .sbk-date-card.is-selected .sbk-date-month {
        color: var(--sbk-white);
    }

    .sbk-date-card.is-selected .sbk-date-check {
        opacity: 1;
        transform: scale(1);
    }

    .sbk-time-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        max-width: 100%;
    }

    .sbk-time-slot {
        flex: 1 1 calc(33.333% - 7px);
        min-width: 84px;
        padding: 12px 8px;
        border-radius: 100px;
        border: 1.5px solid var(--sbk-border);
        background: var(--sbk-white);
        font-weight: 700;
        font-size: .82rem;
        text-align: center;
        cursor: pointer;
        transition: all .2s var(--sbk-ease);
    }

    .sbk-time-slot:hover:not(.is-unavailable) {
        border-color: var(--sbk-emerald);
        box-shadow: 0 10px 20px -12px rgba(15, 139, 95, .45);
    }

    .sbk-time-slot.is-selected {
        background: var(--sbk-emerald);
        border-color: var(--sbk-emerald);
        color: var(--sbk-white);
        box-shadow: 0 0 0 4px var(--sbk-emerald-bright);
    }

    .sbk-time-slot.is-unavailable {
        opacity: .42;
        text-decoration: line-through;
        cursor: not-allowed;
    }

    @media (max-width: 400px) {
        .sbk-time-slot {
            flex-basis: calc(50% - 5px);
            min-width: 0;
            font-size: .78rem;
        }

        .sbk-date-card {
            width: 60px;
        }

        .sbk-date-num {
            font-size: 1.15rem;
        }
    }

    .sbk-validation-msg {
        max-width: 620px;
        margin: 26px auto 0;
        text-align: center;
        color: var(--sbk-danger);
        font-weight: 700;
        font-size: .9rem;
        background: var(--sbk-danger-bg);
        border-radius: var(--sbk-radius-sm);
        padding: 0;
        max-height: 0;
        overflow: hidden;
        opacity: 0;
        transition: all .35s var(--sbk-ease);
    }

    .sbk-validation-msg.is-shown {
        padding: 14px 18px;
        max-height: 80px;
        opacity: 1;
        margin-top: 26px;
    }

    .sbk-step-actions {
        display: flex;
        justify-content: center;
        margin-top: clamp(28px, 5vw, 44px);
    }

    /* =====================================================================
       BUTTONS (self-contained — do not depend on external theme classes)
    ===================================================================== */
    .sbk-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        font-size: .94rem;
        font-weight: 700;
        padding: 14px 30px;
        border-radius: 100px;
        border: 1.5px solid transparent;
        cursor: pointer;
        transition: all .25s var(--sbk-ease);
        white-space: nowrap;
        max-width: 100%;
    }

    .sbk-btn-primary {
        background: var(--sbk-emerald);
        color: var(--sbk-white);
        box-shadow: 0 14px 26px -14px rgba(15, 139, 95, .6);
    }

    .sbk-btn-primary:hover {
        background: var(--sbk-emerald-deep);
        transform: translateY(-2px);
    }

    .sbk-btn-outline {
        background: transparent;
        color: var(--sbk-ink);
        border-color: var(--sbk-border);
    }

    .sbk-btn-outline:hover {
        border-color: var(--sbk-emerald);
        color: var(--sbk-emerald-deep);
    }

    .sbk-btn-block {
        width: 100%;
    }

    .sbk-btn:disabled {
        opacity: .7;
        cursor: not-allowed;
        transform: none;
    }

    .sbk-btn-spinner {
        width: 15px;
        height: 15px;
        border: 2px solid rgba(255, 255, 255, .4);
        border-top-color: var(--sbk-white);
        border-radius: 50%;
        display: none;
        animation: sbk-spin .7s linear infinite;
    }

    .sbk-btn.is-loading .sbk-btn-spinner {
        display: inline-block;
    }

    .sbk-btn.is-loading .sbk-btn-label {
        opacity: .7;
    }

    @keyframes sbk-spin {
        to {
            transform: rotate(360deg);
        }
    }

    @media (max-width: 400px) {
        .sbk-btn {
            width: 100%;
            padding: 14px 18px;
            font-size: .9rem;
        }
    }

    /* =====================================================================
       DETAILS + SUMMARY
    ===================================================================== */
    .sbk-details-grid {
        display: flex;
        flex-wrap: wrap;
        gap: var(--sbk-gap);
        align-items: flex-start;
    }

    .sbk-form-col {
        flex: 1 1 100%;
        min-width: 0;
        max-width: 100%;
    }

    .sbk-summary-col {
        flex: 1 1 100%;
        min-width: 0;
        max-width: 100%;
    }

    @media (min-width: 992px) {
        .sbk-form-col {
            flex-basis: calc(58% - var(--sbk-gap) / 2);
        }

        .sbk-summary-col {
            flex-basis: calc(42% - var(--sbk-gap) / 2);
        }
    }

    .sbk-form-field {
        position: relative;
        margin-bottom: 22px;
    }

    .sbk-form-field input,
    .sbk-form-field select,
    .sbk-form-field textarea {
        width: 100%;
        max-width: 100%;
        border: 1.5px solid var(--sbk-border);
        border-radius: var(--sbk-radius-sm);
        background: var(--sbk-white);
        padding: 20px 16px 8px;
        font-size: 16px;
        font-family: inherit;
        color: var(--sbk-ink);
        transition: border-color .3s var(--sbk-ease), box-shadow .3s var(--sbk-ease);
        resize: vertical;
    }

    .sbk-form-field textarea {
        padding-top: 22px;
        min-height: 90px;
    }

    .sbk-form-field input:focus,
    .sbk-form-field select:focus,
    .sbk-form-field textarea:focus {
        outline: none;
        border-color: var(--sbk-emerald);
        box-shadow: 0 0 0 4px var(--sbk-emerald-bright);
    }

    .sbk-form-field label {
        position: absolute;
        left: 16px;
        top: 17px;
        font-size: .92rem;
        color: var(--sbk-muted);
        pointer-events: none;
        transition: all .2s var(--sbk-ease);
        background: var(--sbk-white);
        padding: 0 4px;
        max-width: calc(100% - 32px);
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .sbk-form-field input:focus+label,
    .sbk-form-field input:not(:placeholder-shown)+label,
    .sbk-form-field textarea:focus+label,
    .sbk-form-field textarea:not(:placeholder-shown)+label,
    .sbk-form-field-select label {
        top: -9px;
        left: 12px;
        font-size: .7rem;
        font-weight: 700;
        color: var(--sbk-emerald-deep);
    }

    .sbk-form-field-select select {
        padding-top: 14px;
        padding-bottom: 14px;
        cursor: pointer;
    }

    .sbk-form-field.has-error input,
    .sbk-form-field.has-error select,
    .sbk-form-field.has-error textarea {
        border-color: var(--sbk-danger);
    }

    .sbk-field-error {
        display: none;
        color: var(--sbk-danger);
        font-size: .78rem;
        font-weight: 600;
        margin-top: 6px;
        padding-left: 4px;
    }

    .sbk-form-field.has-error .sbk-field-error {
        display: block;
    }

    #sbk-err-terms {
        display: none;
        margin-top: 8px;
    }

    #sbk-err-terms.is-shown {
        display: block;
    }

    .sbk-checkbox {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        cursor: pointer;
        margin-top: 6px;
    }

    .sbk-checkbox input {
        position: absolute;
        opacity: 0;
        width: 0;
        height: 0;
    }

    .sbk-checkbox-box {
        width: 21px;
        height: 21px;
        flex: 0 0 auto;
        border-radius: 6px;
        border: 1.5px solid var(--sbk-border);
        background: var(--sbk-white);
        display: flex;
        align-items: center;
        justify-content: center;
        color: transparent;
        font-size: .72rem;
        transition: all .2s var(--sbk-ease);
        margin-top: 1px;
    }

    .sbk-checkbox input:checked+.sbk-checkbox-box {
        background: var(--sbk-emerald);
        border-color: var(--sbk-emerald);
        color: #fff;
    }

    .sbk-checkbox-text {
        font-size: .88rem;
        color: var(--sbk-muted);
        word-break: break-word;
    }

    /* Summary card */
    .sbk-summary-card {
        background: var(--sbk-ink);
        border-radius: var(--sbk-radius-lg);
        padding: clamp(24px, 5vw, 36px);
        color: var(--sbk-white);
        box-shadow: var(--sbk-shadow);
        max-width: 100%;
    }

    @media (min-width: 992px) {
        .sbk-summary-card {
            position: sticky;
            top: 100px;
        }
    }

    .sbk-summary-title {
        font-family: var(--sbk-font-head);
        font-size: 1.3rem;
        font-weight: 600;
        margin: 0 0 22px;
    }

    .sbk-summary-list {
        margin: 0 0 22px;
    }

    .sbk-summary-row {
        display: flex;
        justify-content: space-between;
        align-items: baseline;
        gap: 10px;
        padding: 13px 0;
        border-bottom: 1px solid rgba(255, 255, 255, .12);
    }

    .sbk-summary-row dt {
        color: rgba(255, 255, 255, .55);
        font-size: .84rem;
        font-weight: 600;
        flex: 0 0 auto;
    }

    .sbk-summary-row dd {
        margin: 0;
        font-weight: 700;
        text-align: right;
        overflow-wrap: anywhere;
        min-width: 0;
    }

    .sbk-summary-total {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 10px;
        padding: 16px 0 24px;
        font-family: var(--sbk-font-head);
        flex-wrap: wrap;
    }

    .sbk-summary-total span:first-child {
        color: rgba(255, 255, 255, .6);
        font-size: .96rem;
    }

    .sbk-summary-total span:last-child {
        font-size: clamp(1.4rem, 5vw, 1.8rem);
        font-weight: 600;
        color: var(--sbk-emerald);
    }

    .sbk-summary-note {
        font-size: .76rem;
        color: rgba(255, 255, 255, .5);
        margin-top: 14px;
        text-align: center;
    }

    /* =====================================================================
       SUCCESS MODAL
    ===================================================================== */
    .sbk-modal-backdrop {
        position: fixed;
        inset: 0;
        background: rgba(10, 12, 10, .55);
        backdrop-filter: blur(6px);
        -webkit-backdrop-filter: blur(6px);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2000;
        opacity: 0;
        pointer-events: none;
        transition: opacity .3s var(--sbk-ease);
        padding: 16px;
    }

    .sbk-modal-backdrop.is-open {
        opacity: 1;
        pointer-events: auto;
    }

    .sbk-modal {
        background: var(--sbk-white);
        border-radius: var(--sbk-radius-lg);
        max-width: 440px;
        width: 100%;
        max-height: calc(100vh - 32px);
        overflow-y: auto;
        padding: clamp(26px, 6vw, 42px) clamp(20px, 5vw, 34px) clamp(24px, 5vw, 32px);
        text-align: center;
        box-shadow: var(--sbk-shadow);
        transform: scale(.9);
        transition: transform .35s var(--sbk-ease);
    }

    .sbk-modal-backdrop.is-open .sbk-modal {
        transform: scale(1);
    }

    .sbk-modal-check {
        width: 66px;
        height: 66px;
        border-radius: 50%;
        background: var(--sbk-emerald-bright);
        color: var(--sbk-emerald);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        margin: 0 auto 20px;
        animation: sbk-check-pop .45s var(--sbk-ease) .1s both;
    }

    @keyframes sbk-check-pop {
        0% {
            transform: scale(0);
        }

        70% {
            transform: scale(1.12);
        }

        100% {
            transform: scale(1);
        }
    }

    .sbk-modal-title {
        font-family: var(--sbk-font-head);
        font-size: clamp(1.15rem, 4vw, 1.4rem);
        font-weight: 600;
        margin: 0 0 8px;
    }

    .sbk-modal-text {
        color: var(--sbk-muted);
        margin: 0 0 22px;
        font-size: .92rem;
    }

    .sbk-modal-summary {
        text-align: left;
        background: var(--sbk-bg-soft);
        border-radius: var(--sbk-radius-md);
        padding: 16px 18px;
        margin: 0 0 24px;
    }

    .sbk-modal-summary div {
        display: flex;
        justify-content: space-between;
        gap: 10px;
        padding: 8px 0;
        border-bottom: 1px solid var(--sbk-border);
        font-size: .86rem;
    }

    .sbk-modal-summary div:last-child {
        border-bottom: none;
    }

    .sbk-modal-summary dt {
        color: var(--sbk-muted);
        font-weight: 600;
        flex: 0 0 auto;
    }

    .sbk-modal-summary dd {
        margin: 0;
        font-weight: 700;
        text-align: right;
        overflow-wrap: anywhere;
        min-width: 0;
    }

    .sbk-modal-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .sbk-modal-actions .sbk-btn {
        flex: 1 1 160px;
    }

    @media (max-width: 420px) {
        .sbk-modal-actions {
            flex-direction: column;
        }

        .sbk-modal-actions .sbk-btn {
            flex-basis: auto;
        }
    }

    /* =====================================================================
       CONTACT / HELP
    ===================================================================== */
    .sbk-contact-btns {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 14px;
        margin-top: 28px;
    }

    .sbk-contact-btns .sbk-btn {
        flex: 0 1 220px;
    }

    @media (max-width: 480px) {
        .sbk-contact-btns {
            flex-direction: column;
            align-items: stretch;
        }

        .sbk-contact-btns .sbk-btn {
            flex-basis: auto;
        }
    }

    /* =====================================================================
       EXTRA-SMALL / FEATURE PHONE SAFETY NET (JioPhone / KaiOS-class, ≤240px)
    ===================================================================== */
    @media (max-width: 320px) {
        .sbk-section {
            padding: 32px 0;
        }

        .sbk-service-card {
            padding: 16px 14px;
        }

        .sbk-summary-card {
            padding: 20px 16px;
        }

        .sbk-modal {
            padding: 20px 14px 18px;
        }

        .sbk-date-card {
            width: 54px;
            padding: 12px 0 10px;
        }

        .sbk-date-num {
            font-size: 1rem;
        }

        .sbk-progress {
            padding-top: 10px;
        }
    }

    @media (max-width: 240px) {
        .sbk-container {
            padding-inline: 10px;
        }

        .sbk-hero {
            padding: 46px 0 28px;
        }

        .sbk-hero-chips {
            gap: 6px;
        }

        .sbk-hero-chip {
            font-size: .68rem;
            padding: 6px 10px;
        }

        .sbk-time-slot {
            flex-basis: 100%;
        }

        .sbk-date-card {
            width: 50px;
        }

        .sbk-btn {
            padding: 12px 14px;
            font-size: .82rem;
        }
    }
</style>

<div class="sbk-page">

    <!-- ─────────────────────────── HERO ─────────────────────────── -->
    <section class="sbk-hero">
        <div class="sbk-container">
            <span class="sbk-hero-tag"><i class="bi bi-scissors"></i> Book Your Appointment</span>
            <h1>Reserve Your Time for Premium Grooming &amp; Care</h1>
            <p>Choose a service, pick a slot that suits you, and we'll take care of the rest.</p>
            <div class="sbk-hero-chips">
                <span class="sbk-hero-chip"><i class="bi bi-clock"></i> Open 9 AM – 8 PM</span>
                <span class="sbk-hero-chip"><i class="bi bi-star-fill"></i> Rated 4.8/5</span>
                <span class="sbk-hero-chip"><i class="bi bi-shield-check"></i> Hygiene Assured</span>
            </div>
        </div>
    </section>

    <!-- ─────────────────────────── PROGRESS ─────────────────────────── -->
    <nav class="sbk-progress" id="sbkProgress" aria-label="Booking progress">
        <div class="sbk-progress-step is-active" data-step="1">
            <span class="sbk-progress-num">1</span>
            <span class="sbk-progress-label">Service</span>
        </div>
        <div class="sbk-progress-step" data-step="2">
            <span class="sbk-progress-num">2</span>
            <span class="sbk-progress-label">Date &amp; Time</span>
        </div>
        <div class="sbk-progress-step" data-step="3">
            <span class="sbk-progress-num">3</span>
            <span class="sbk-progress-label">Your Details</span>
        </div>
        <div class="sbk-progress-step" data-step="4">
            <span class="sbk-progress-num">4</span>
            <span class="sbk-progress-label">Confirmed</span>
        </div>
    </nav>

    <main>
        <!-- ============================================
             1. CHOOSE A SERVICE
        ============================================= -->
        <section class="sbk-section" id="booking-service">
            <div class="sbk-container">
                <div class="sbk-section-head">
                    <p class="sbk-eyebrow">Step 1</p>
                    <h2 class="sbk-section-title">Choose Your Service</h2>
                    <p class="sbk-section-sub">Pick the treatment you'd like to book today.</p>
                </div>

                <div class="sbk-services-grid" id="serviceGrid" role="radiogroup" aria-label="Choose a service">

                    <button type="button" class="sbk-service-card" role="radio" aria-checked="false"
                        data-service="Haircut &amp; Styling" data-price="349" data-duration="40 min">
                        <span class="sbk-service-radio"><i class="bi bi-check-lg"></i></span>
                        <span class="sbk-service-icon"><i class="bi bi-scissors"></i></span>
                        <h3 class="sbk-service-name">Haircut &amp; Styling</h3>
                        <p class="sbk-service-desc">Precision cut and styling tailored to your face shape and look.</p>
                        <div class="sbk-service-meta">
                            <span class="sbk-service-duration"><i class="bi bi-clock"></i> 40 min</span>
                            <span class="sbk-service-price">₹349</span>
                        </div>
                    </button>

                    <button type="button" class="sbk-service-card" role="radio" aria-checked="false"
                        data-service="Beard Trim &amp; Shape" data-price="199" data-duration="25 min">
                        <span class="sbk-service-radio"><i class="bi bi-check-lg"></i></span>
                        <span class="sbk-service-icon"><i class="bi bi-magic"></i></span>
                        <h3 class="sbk-service-name">Beard Trim &amp; Shape</h3>
                        <p class="sbk-service-desc">Sharp shaping and hot-towel finish for a clean, defined beard.</p>
                        <div class="sbk-service-meta">
                            <span class="sbk-service-duration"><i class="bi bi-clock"></i> 25 min</span>
                            <span class="sbk-service-price">₹199</span>
                        </div>
                    </button>

                    <button type="button" class="sbk-service-card" role="radio" aria-checked="false"
                        data-service="Hair Colour" data-price="899" data-duration="70 min">
                        <span class="sbk-service-badge">Popular</span>
                        <span class="sbk-service-radio"><i class="bi bi-check-lg"></i></span>
                        <span class="sbk-service-icon"><i class="bi bi-palette2"></i></span>
                        <h3 class="sbk-service-name">Hair Colour</h3>
                        <p class="sbk-service-desc">Global or highlight colour with ammonia-free premium tones.</p>
                        <div class="sbk-service-meta">
                            <span class="sbk-service-duration"><i class="bi bi-clock"></i> 70 min</span>
                            <span class="sbk-service-price">₹899</span>
                        </div>
                    </button>

                    <button type="button" class="sbk-service-card" role="radio" aria-checked="false"
                        data-service="Head Massage &amp; Spa" data-price="449" data-duration="35 min">
                        <span class="sbk-service-radio"><i class="bi bi-check-lg"></i></span>
                        <span class="sbk-service-icon"><i class="bi bi-droplet"></i></span>
                        <h3 class="sbk-service-name">Head Massage &amp; Spa</h3>
                        <p class="sbk-service-desc">Relaxing oil massage and steam to relieve stress and tension.</p>
                        <div class="sbk-service-meta">
                            <span class="sbk-service-duration"><i class="bi bi-clock"></i> 35 min</span>
                            <span class="sbk-service-price">₹449</span>
                        </div>
                    </button>

                    <button type="button" class="sbk-service-card" role="radio" aria-checked="false"
                        data-service="Facial Cleanup" data-price="599" data-duration="45 min">
                        <span class="sbk-service-radio"><i class="bi bi-check-lg"></i></span>
                        <span class="sbk-service-icon"><i class="bi bi-emoji-smile"></i></span>
                        <h3 class="sbk-service-name">Facial Cleanup</h3>
                        <p class="sbk-service-desc">Deep cleansing facial for fresh, glowing, healthy-looking skin.</p>
                        <div class="sbk-service-meta">
                            <span class="sbk-service-duration"><i class="bi bi-clock"></i> 45 min</span>
                            <span class="sbk-service-price">₹599</span>
                        </div>
                    </button>

                    <button type="button" class="sbk-service-card" role="radio" aria-checked="false"
                        data-service="Bridal / Party Package" data-price="2499" data-duration="120 min">
                        <span class="sbk-service-radio"><i class="bi bi-check-lg"></i></span>
                        <span class="sbk-service-icon"><i class="bi bi-gem"></i></span>
                        <h3 class="sbk-service-name">Bridal / Party Package</h3>
                        <p class="sbk-service-desc">Complete grooming package — hair, skin and styling, all in one.</p>
                        <div class="sbk-service-meta">
                            <span class="sbk-service-duration"><i class="bi bi-clock"></i> 120 min</span>
                            <span class="sbk-service-price">₹2,499</span>
                        </div>
                    </button>

                </div>
            </div>
        </section>

        <!-- ============================================
             2. CHOOSE DATE & TIME
        ============================================= -->
        <section class="sbk-section sbk-section-alt" id="booking-datetime">
            <div class="sbk-container">
                <div class="sbk-section-head">
                    <p class="sbk-eyebrow">Step 2</p>
                    <h2 class="sbk-section-title">Choose Your Date &amp; Time</h2>
                    <p class="sbk-section-sub">Pick a convenient day and slot for your appointment.</p>
                </div>

                <div class="sbk-datetime-grid">
                    <div class="sbk-datetime-col">
                        <h3 class="sbk-col-title"><i class="bi bi-calendar3"></i> Select Date</h3>
                        <div class="sbk-date-scroller" id="dateScroller" role="radiogroup" aria-label="Choose a date">
                            <button type="button" class="sbk-date-card" role="radio" aria-checked="false" data-date="2026-09-16">
                                <span class="sbk-date-day">WED</span>
                                <span class="sbk-date-num">16</span>
                                <span class="sbk-date-month">SEP</span>
                                <span class="sbk-date-check"><i class="bi bi-check-lg"></i></span>
                            </button>
                            <button type="button" class="sbk-date-card" role="radio" aria-checked="false" data-date="2026-09-17">
                                <span class="sbk-date-day">THU</span>
                                <span class="sbk-date-num">17</span>
                                <span class="sbk-date-month">SEP</span>
                                <span class="sbk-date-check"><i class="bi bi-check-lg"></i></span>
                            </button>
                            <button type="button" class="sbk-date-card" role="radio" aria-checked="false" data-date="2026-09-18">
                                <span class="sbk-date-day">FRI</span>
                                <span class="sbk-date-num">18</span>
                                <span class="sbk-date-month">SEP</span>
                                <span class="sbk-date-check"><i class="bi bi-check-lg"></i></span>
                            </button>
                            <button type="button" class="sbk-date-card" role="radio" aria-checked="false" data-date="2026-09-19">
                                <span class="sbk-date-day">SAT</span>
                                <span class="sbk-date-num">19</span>
                                <span class="sbk-date-month">SEP</span>
                                <span class="sbk-date-check"><i class="bi bi-check-lg"></i></span>
                            </button>
                            <button type="button" class="sbk-date-card" role="radio" aria-checked="false" data-date="2026-09-20">
                                <span class="sbk-date-day">SUN</span>
                                <span class="sbk-date-num">20</span>
                                <span class="sbk-date-month">SEP</span>
                                <span class="sbk-date-check"><i class="bi bi-check-lg"></i></span>
                            </button>
                            <button type="button" class="sbk-date-card" role="radio" aria-checked="false" data-date="2026-09-21">
                                <span class="sbk-date-day">MON</span>
                                <span class="sbk-date-num">21</span>
                                <span class="sbk-date-month">SEP</span>
                                <span class="sbk-date-check"><i class="bi bi-check-lg"></i></span>
                            </button>
                            <button type="button" class="sbk-date-card" role="radio" aria-checked="false" data-date="2026-09-22">
                                <span class="sbk-date-day">TUE</span>
                                <span class="sbk-date-num">22</span>
                                <span class="sbk-date-month">SEP</span>
                                <span class="sbk-date-check"><i class="bi bi-check-lg"></i></span>
                            </button>
                        </div>
                    </div>

                    <div class="sbk-datetime-col">
                        <h3 class="sbk-col-title"><i class="bi bi-clock"></i> Available Time</h3>
                        <div class="sbk-time-grid" id="timeGrid" role="radiogroup" aria-label="Choose a time slot">
                            <button type="button" class="sbk-time-slot" role="radio" aria-checked="false" data-time="09:00 AM">09:00 AM</button>
                            <button type="button" class="sbk-time-slot" role="radio" aria-checked="false" data-time="09:30 AM">09:30 AM</button>
                            <button type="button" class="sbk-time-slot is-unavailable" role="radio" aria-checked="false" aria-disabled="true" data-time="10:00 AM" disabled>10:00 AM</button>
                            <button type="button" class="sbk-time-slot" role="radio" aria-checked="false" data-time="10:30 AM">10:30 AM</button>
                            <button type="button" class="sbk-time-slot" role="radio" aria-checked="false" data-time="11:00 AM">11:00 AM</button>
                            <button type="button" class="sbk-time-slot is-unavailable" role="radio" aria-checked="false" aria-disabled="true" data-time="11:30 AM" disabled>11:30 AM</button>
                            <button type="button" class="sbk-time-slot" role="radio" aria-checked="false" data-time="12:00 PM">12:00 PM</button>
                            <button type="button" class="sbk-time-slot" role="radio" aria-checked="false" data-time="02:00 PM">02:00 PM</button>
                            <button type="button" class="sbk-time-slot is-unavailable" role="radio" aria-checked="false" aria-disabled="true" data-time="02:30 PM" disabled>02:30 PM</button>
                            <button type="button" class="sbk-time-slot" role="radio" aria-checked="false" data-time="03:00 PM">03:00 PM</button>
                            <button type="button" class="sbk-time-slot" role="radio" aria-checked="false" data-time="04:00 PM">04:00 PM</button>
                            <button type="button" class="sbk-time-slot" role="radio" aria-checked="false" data-time="05:00 PM">05:00 PM</button>
                            <button type="button" class="sbk-time-slot is-unavailable" role="radio" aria-checked="false" aria-disabled="true" data-time="06:00 PM" disabled>06:00 PM</button>
                            <button type="button" class="sbk-time-slot" role="radio" aria-checked="false" data-time="07:00 PM">07:00 PM</button>
                        </div>
                    </div>
                </div>

                <div class="sbk-validation-msg" id="step3Validation" role="alert" aria-live="assertive"></div>

                <div class="sbk-step-actions">
                    <button type="button" class="sbk-btn sbk-btn-primary" id="continueBtn">
                        <span>Continue</span>
                        <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- ============================================
             3. CUSTOMER DETAILS + BOOKING SUMMARY
        ============================================= -->
        <section class="sbk-section" id="booking-details">
            <div class="sbk-container">
                <div class="sbk-section-head">
                    <p class="sbk-eyebrow">Step 3</p>
                    <h2 class="sbk-section-title">Your Details</h2>
                    <p class="sbk-section-sub">Just a few details and your chair is reserved.</p>
                </div>

                <div class="sbk-details-grid">
                    <div class="sbk-form-col">
                        <form id="bookingForm" novalidate>

                            <div class="sbk-form-field">
                                <input type="text" id="fullName" name="fullName" placeholder=" " autocomplete="name" required>
                                <label for="fullName">Full Name</label>
                                <span class="sbk-field-error" id="err-fullName">Please enter your name.</span>
                            </div>

                            <div class="sbk-form-field">
                                <input type="tel" id="mobile" name="mobile" placeholder=" " autocomplete="tel" inputmode="numeric" maxlength="10" required>
                                <label for="mobile">Mobile Number</label>
                                <span class="sbk-field-error" id="err-mobile">Enter a valid 10-digit mobile number.</span>
                            </div>

                            <div class="sbk-form-field">
                                <input type="email" id="email" name="email" placeholder=" " autocomplete="email" required>
                                <label for="email">Email Address</label>
                                <span class="sbk-field-error" id="err-email">Enter a valid email address.</span>
                            </div>

                            <div class="sbk-form-field sbk-form-field-select">
                                <select id="gender" name="gender" required>
                                    <option value="" disabled selected hidden> </option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                    <option value="Prefer not to say">Prefer not to say</option>
                                </select>
                                <label for="gender">Select Gender</label>
                                <span class="sbk-field-error" id="err-gender">Please select a gender.</span>
                            </div>

                            <div class="sbk-form-field">
                                <textarea id="specialRequest" name="specialRequest" placeholder=" " rows="3"></textarea>
                                <label for="specialRequest">Special Request (optional)</label>
                            </div>

                            <label class="sbk-checkbox">
                                <input type="checkbox" id="terms" name="terms" required>
                                <span class="sbk-checkbox-box"><i class="bi bi-check-lg"></i></span>
                                <span class="sbk-checkbox-text">I agree to the salon booking terms.</span>
                            </label>
                            <span class="sbk-field-error" id="sbk-err-terms">Please accept the booking terms to continue.</span>

                        </form>
                    </div>

                    <div class="sbk-summary-col">
                        <div class="sbk-summary-card">
                            <h3 class="sbk-summary-title">Booking Summary</h3>
                            <dl class="sbk-summary-list">
                                <div class="sbk-summary-row">
                                    <dt>Service</dt>
                                    <dd id="sumService">Not selected</dd>
                                </div>
                                <div class="sbk-summary-row">
                                    <dt>Duration</dt>
                                    <dd id="sumDuration">—</dd>
                                </div>
                                <div class="sbk-summary-row">
                                    <dt>Date</dt>
                                    <dd id="sumDate">Not selected</dd>
                                </div>
                                <div class="sbk-summary-row">
                                    <dt>Time</dt>
                                    <dd id="sumTime">Not selected</dd>
                                </div>
                                <div class="sbk-summary-row">
                                    <dt>Customer</dt>
                                    <dd id="sumCustomer">—</dd>
                                </div>
                            </dl>
                            <div class="sbk-summary-total">
                                <span>Total</span>
                                <span id="sumPrice">₹0</span>
                            </div>
                            <button type="submit" form="bookingForm" class="sbk-btn sbk-btn-primary sbk-btn-block" id="confirmBtn">
                                <span class="sbk-btn-label">Confirm Booking</span>
                                <span class="sbk-btn-spinner" aria-hidden="true"></span>
                            </button>
                            <p class="sbk-summary-note">No payment required now — pay at the salon.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Success Popup -->
            <div class="sbk-modal-backdrop" id="successBackdrop">
                <div class="sbk-modal" role="dialog" aria-modal="true" aria-labelledby="successTitle">
                    <div class="sbk-modal-check"><i class="bi bi-check-lg"></i></div>
                    <h3 class="sbk-modal-title" id="successTitle">Appointment Confirmed!</h3>
                    <p class="sbk-modal-text">Your salon appointment has been successfully reserved.</p>

                    <dl class="sbk-modal-summary">
                        <div>
                            <dt>Booking ID</dt>
                            <dd id="popBookingId">—</dd>
                        </div>
                        <div>
                            <dt>Service</dt>
                            <dd id="popService">—</dd>
                        </div>
                        <div>
                            <dt>Date</dt>
                            <dd id="popDate">—</dd>
                        </div>
                        <div>
                            <dt>Time</dt>
                            <dd id="popTime">—</dd>
                        </div>
                        <div>
                            <dt>Customer</dt>
                            <dd id="popCustomer">—</dd>
                        </div>
                    </dl>

                    <div class="sbk-modal-actions">
                        <button type="button" class="sbk-btn sbk-btn-outline" id="addToCalendarBtn"><i class="bi bi-calendar-plus"></i> Add to Calendar</button>
                        <button type="button" class="sbk-btn sbk-btn-primary" id="backToHomeBtn">Back to Home</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================
             4. HELP / CONTACT
        ============================================= -->
        <section class="sbk-section sbk-section-alt" id="contact">
            <div class="sbk-container">
                <div class="sbk-section-head">
                    <p class="sbk-eyebrow">Get In Touch</p>
                    <h2 class="sbk-section-title">Need help? Let's talk.</h2>
                    <p class="sbk-section-sub">Have a question about services, pricing or your booking? Our team typically responds within a few hours and is happy to help you find the right treatment.</p>
                </div>
                <div class="sbk-contact-btns">
                    <a href="#contact" class="sbk-btn sbk-btn-primary"><i class="bi bi-chat-dots"></i> Click Here</a>
                    <a href="tel:+910000000000" class="sbk-btn sbk-btn-outline"><i class="bi bi-telephone"></i> Call Us Now</a>
                </div>
            </div>
        </section>
    </main>
</div>

<script>
    (function() {
        "use strict";

        /* =========================================================
           STATE
        ========================================================= */
        const state = {
            service: null,
            price: 0,
            duration: null,
            date: null,
            time: null
        };

        /* =========================================================
           PROGRESS INDICATOR
        ========================================================= */
        const progressSteps = document.querySelectorAll("#sbkProgress .sbk-progress-step");

        function updateProgress() {
            const serviceDone = !!state.service;
            const dateTimeDone = !!(state.date && state.time);

            progressSteps.forEach((step) => {
                const n = Number(step.dataset.step);
                step.classList.remove("is-active", "is-done");
                if (n === 1) {
                    step.classList.add(serviceDone ? "is-done" : "is-active");
                } else if (n === 2) {
                    if (dateTimeDone) step.classList.add("is-done");
                    else if (serviceDone) step.classList.add("is-active");
                } else if (n === 3) {
                    if (serviceDone && dateTimeDone) step.classList.add("is-active");
                }
            });
        }

        /* =========================================================
           SERVICE SELECTION
        ========================================================= */
        const serviceCards = document.querySelectorAll(".sbk-service-card");

        serviceCards.forEach((card) => {
            card.addEventListener("click", () => {
                serviceCards.forEach((c) => {
                    c.classList.remove("is-selected");
                    c.setAttribute("aria-checked", "false");
                });
                card.classList.add("is-selected");
                card.setAttribute("aria-checked", "true");

                state.service = card.dataset.service;
                state.price = Number(card.dataset.price) || 0;
                state.duration = card.dataset.duration || null;

                updateSummary();
                updateProgress();
            });
        });

        /* =========================================================
           DATE SELECTION
        ========================================================= */
        const dateCards = document.querySelectorAll(".sbk-date-card");

        dateCards.forEach((card) => {
            card.addEventListener("click", () => {
                dateCards.forEach((c) => {
                    c.classList.remove("is-selected");
                    c.setAttribute("aria-checked", "false");
                });
                card.classList.add("is-selected");
                card.setAttribute("aria-checked", "true");

                const day = card.querySelector(".sbk-date-day").textContent;
                const num = card.querySelector(".sbk-date-num").textContent;
                const month = card.querySelector(".sbk-date-month").textContent;

                state.date = {
                    label: `${day} ${num} ${month}`,
                    iso: card.dataset.date
                };
                updateSummary();
                updateProgress();
            });
        });

        /* =========================================================
           TIME SELECTION
        ========================================================= */
        const timeSlots = document.querySelectorAll(".sbk-time-slot");

        timeSlots.forEach((slot) => {
            if (slot.classList.contains("is-unavailable")) return;
            slot.addEventListener("click", () => {
                timeSlots.forEach((s) => {
                    s.classList.remove("is-selected");
                    s.setAttribute("aria-checked", "false");
                });
                slot.classList.add("is-selected");
                slot.setAttribute("aria-checked", "true");

                state.time = slot.dataset.time;
                updateSummary();
                updateProgress();
            });
        });

        /* =========================================================
           STEP 2 -> CONTINUE VALIDATION
        ========================================================= */
        const continueBtn = document.getElementById("continueBtn");
        const step3Validation = document.getElementById("step3Validation");

        continueBtn.addEventListener("click", () => {
            const missing = [];
            if (!state.service) missing.push("a service");
            if (!state.date) missing.push("a date");
            if (!state.time) missing.push("a time slot");

            if (missing.length) {
                step3Validation.textContent = `Please select ${missing.join(", ")} before continuing.`;
                step3Validation.classList.add("is-shown");
                window.setTimeout(() => step3Validation.classList.remove("is-shown"), 3800);

                const target = !state.service ? "booking-service" : "booking-datetime";
                const el = document.getElementById(target);
                if (el) el.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
                return;
            }

            step3Validation.classList.remove("is-shown");
            const detailsEl = document.getElementById("booking-details");
            if (detailsEl) detailsEl.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        });

        /* =========================================================
           BOOKING SUMMARY
        ========================================================= */
        const sumService = document.getElementById("sumService");
        const sumDuration = document.getElementById("sumDuration");
        const sumDate = document.getElementById("sumDate");
        const sumTime = document.getElementById("sumTime");
        const sumCustomer = document.getElementById("sumCustomer");
        const sumPrice = document.getElementById("sumPrice");
        const fullNameInput = document.getElementById("fullName");

        function updateSummary() {
            sumService.textContent = state.service || "Not selected";
            sumDuration.textContent = state.duration || "—";
            sumDate.textContent = state.date ? state.date.label : "Not selected";
            sumTime.textContent = state.time || "Not selected";
            sumCustomer.textContent = fullNameInput.value.trim() || "—";
            sumPrice.textContent = `₹${state.price ? state.price.toLocaleString("en-IN") : 0}`;
        }

        fullNameInput.addEventListener("input", updateSummary);

        /* =========================================================
           FORM VALIDATION + SUBMISSION
        ========================================================= */
        const form = document.getElementById("bookingForm");
        const mobileInput = document.getElementById("mobile");
        const emailInput = document.getElementById("email");
        const genderInput = document.getElementById("gender");
        const termsInput = document.getElementById("terms");
        const errTerms = document.getElementById("sbk-err-terms");
        const confirmBtn = document.getElementById("confirmBtn");

        function setFieldError(input, hasError) {
            const field = input.closest(".sbk-form-field");
            if (field) field.classList.toggle("has-error", hasError);
        }

        function validateMobile(value) {
            return /^[6-9]\d{9}$/.test(value.trim());
        }

        function validateEmail(value) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value.trim());
        }

        mobileInput.addEventListener("input", () => {
            mobileInput.value = mobileInput.value.replace(/\D/g, "").slice(0, 10);
        });

        form.addEventListener("submit", (e) => {
            e.preventDefault();

            let valid = true;

            if (!state.service || !state.date || !state.time) {
                step3Validation.textContent = "Please complete the service, date and time selection first.";
                step3Validation.classList.add("is-shown");
                window.setTimeout(() => step3Validation.classList.remove("is-shown"), 3800);
                const el = document.getElementById("booking-service");
                if (el) el.scrollIntoView({
                    behavior: "smooth"
                });
                return;
            }

            if (!fullNameInput.value.trim()) {
                setFieldError(fullNameInput, true);
                valid = false;
            } else {
                setFieldError(fullNameInput, false);
            }

            if (!validateMobile(mobileInput.value)) {
                setFieldError(mobileInput, true);
                valid = false;
            } else {
                setFieldError(mobileInput, false);
            }

            if (!validateEmail(emailInput.value)) {
                setFieldError(emailInput, true);
                valid = false;
            } else {
                setFieldError(emailInput, false);
            }

            if (!genderInput.value) {
                setFieldError(genderInput, true);
                valid = false;
            } else {
                setFieldError(genderInput, false);
            }

            if (!termsInput.checked) {
                errTerms.classList.add("is-shown");
                valid = false;
            } else {
                errTerms.classList.remove("is-shown");
            }

            if (!valid) {
                const firstError = form.querySelector(".has-error, #sbk-err-terms.is-shown");
                if (firstError) firstError.scrollIntoView({
                    behavior: "smooth",
                    block: "center"
                });
                return;
            }

            confirmBtn.classList.add("is-loading");
            confirmBtn.disabled = true;

            window.setTimeout(() => {
                confirmBtn.classList.remove("is-loading");
                confirmBtn.disabled = false;
                showSuccessPopup();
            }, 900);
        });

        /* =========================================================
           SUCCESS POPUP
        ========================================================= */
        const successBackdrop = document.getElementById("successBackdrop");
        const popBookingId = document.getElementById("popBookingId");
        const popService = document.getElementById("popService");
        const popDate = document.getElementById("popDate");
        const popTime = document.getElementById("popTime");
        const popCustomer = document.getElementById("popCustomer");
        const backToHomeBtn = document.getElementById("backToHomeBtn");
        const addToCalendarBtn = document.getElementById("addToCalendarBtn");

        let lastBookingId = "";

        function generateBookingId() {
            const rand = Math.floor(1000 + Math.random() * 9000);
            return `VGS-${new Date().getFullYear()}-${rand}`;
        }

        function showSuccessPopup() {
            lastBookingId = generateBookingId();
            popBookingId.textContent = lastBookingId;
            popService.textContent = state.service;
            popDate.textContent = state.date.label;
            popTime.textContent = state.time;
            popCustomer.textContent = fullNameInput.value.trim();

            successBackdrop.classList.add("is-open");
            document.body.style.overflow = "hidden";
            updateProgress();
            progressSteps.forEach((s) => {
                if (Number(s.dataset.step) === 4) s.classList.add("is-active");
            });
        }

        function closeSuccessPopup() {
            successBackdrop.classList.remove("is-open");
            document.body.style.overflow = "";
        }

        successBackdrop.addEventListener("click", (e) => {
            if (e.target === successBackdrop) closeSuccessPopup();
        });

        backToHomeBtn.addEventListener("click", () => {
            closeSuccessPopup();
            resetBooking();
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });

        addToCalendarBtn.addEventListener("click", () => {
            if (!state.date || !state.time) return;

            const dateObj = new Date(`${state.date.iso}T00:00:00`);
            const [time, meridiem] = state.time.split(" ");
            let [hh, mm] = time.split(":").map(Number);
            if (meridiem === "PM" && hh !== 12) hh += 12;
            if (meridiem === "AM" && hh === 12) hh = 0;
            dateObj.setHours(hh, mm, 0, 0);

            const start = dateObj.toISOString().replace(/[-:]/g, "").split(".")[0] + "Z";
            const endObj = new Date(dateObj.getTime() + 45 * 60000);
            const end = endObj.toISOString().replace(/[-:]/g, "").split(".")[0] + "Z";

            const details = encodeURIComponent(
                `Salon appointment.\nService: ${state.service}\nBooking ID: ${lastBookingId}`
            );
            const title = encodeURIComponent(`Salon Appointment — ${state.service}`);
            const url = `https://calendar.google.com/calendar/render?action=TEMPLATE&text=${title}&dates=${start}/${end}&details=${details}&location=Salon`;

            window.open(url, "_blank", "noopener");
        });

        /* =========================================================
           RESET BOOKING
        ========================================================= */
        function resetBooking() {
            state.service = null;
            state.price = 0;
            state.duration = null;
            state.date = null;
            state.time = null;

            serviceCards.forEach((c) => {
                c.classList.remove("is-selected");
                c.setAttribute("aria-checked", "false");
            });

            dateCards.forEach((c) => {
                c.classList.remove("is-selected");
                c.setAttribute("aria-checked", "false");
            });

            timeSlots.forEach((s) => {
                s.classList.remove("is-selected");
                s.setAttribute("aria-checked", "false");
            });

            form.reset();
            [fullNameInput, mobileInput, emailInput, genderInput].forEach((el) => setFieldError(el, false));
            errTerms.classList.remove("is-shown");

            updateSummary();
            updateProgress();
        }

        /* Initial render */
        updateSummary();
        updateProgress();
    })();
</script>

<?php include('include/footer.php'); ?>