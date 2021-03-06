!function (e) {
    "function" == typeof define && define.amd ? define(["jquery", "moment"], e) : e(jQuery, moment)
}(function (e, a) {
    function t(e, a, t, r) {
        var n = e;
        switch (t) {
            case"s":
                return r || a ? "néhány másodperc" : "néhány másodperce";
            case"m":
                return "egy" + (r || a ? " perc" : " perce");
            case"mm":
                return n + (r || a ? " perc" : " perce");
            case"h":
                return "egy" + (r || a ? " óra" : " órája");
            case"hh":
                return n + (r || a ? " óra" : " órája");
            case"d":
                return "egy" + (r || a ? " nap" : " napja");
            case"dd":
                return n + (r || a ? " nap" : " napja");
            case"M":
                return "egy" + (r || a ? " hónap" : " hónapja");
            case"MM":
                return n + (r || a ? " hónap" : " hónapja");
            case"y":
                return "egy" + (r || a ? " év" : " éve");
            case"yy":
                return n + (r || a ? " év" : " éve")
        }
        return ""
    }

    function r(e) {
        return (e ? "" : "[múlt] ") + "[" + n[this.day()] + "] LT[-kor]"
    }

    var n = "vasárnap hétfőn kedden szerdán csütörtökön pénteken szombaton".split(" ");
    (a.defineLocale || a.lang).call(a, "hu", {
        months: "január_február_március_április_május_június_július_augusztus_szeptember_október_november_december".split("_"),
        monthsShort: "jan_feb_márc_ápr_máj_jún_júl_aug_szept_okt_nov_dec".split("_"),
        weekdays: "vasárnap_hétfő_kedd_szerda_csütörtök_péntek_szombat".split("_"),
        weekdaysShort: "vas_hét_kedd_sze_csüt_pén_szo".split("_"),
        weekdaysMin: "v_h_k_sze_cs_p_szo".split("_"),
        longDateFormat: {
            LT: "H:mm",
            LTS: "LT:ss",
            L: "YYYY.MM.DD.",
            LL: "YYYY. MMMM D.",
            LLL: "YYYY. MMMM D., LT",
            LLLL: "YYYY. MMMM D., dddd LT"
        },
        meridiem: function (e, a, t) {
            return 12 > e ? t === !0 ? "de" : "DE" : t === !0 ? "du" : "DU"
        },
        calendar: {
            sameDay: "[ma] LT[-kor]", nextDay: "[holnap] LT[-kor]", nextWeek: function () {
                return r.call(this, !0)
            }, lastDay: "[tegnap] LT[-kor]", lastWeek: function () {
                return r.call(this, !1)
            }, sameElse: "L"
        },
        relativeTime: {
            future: "%s múlva",
            past: "%s",
            s: t,
            m: t,
            mm: t,
            h: t,
            hh: t,
            d: t,
            dd: t,
            M: t,
            MM: t,
            y: t,
            yy: t
        },
        ordinalParse: /\d{1,2}\./,
        ordinal: "%d.",
        week: {dow: 1, doy: 7}
    }), e.fullCalendar.datepickerLang("hu", "hu", {
        closeText: "bezár",
        prevText: "vissza",
        nextText: "előre",
        currentText: "ma",
        monthNames: ["Január", "Február", "Március", "Április", "Május", "Június", "Július", "Augusztus", "Szeptember", "Október", "November", "December"],
        monthNamesShort: ["Jan", "Feb", "Már", "Ápr", "Máj", "Jún", "Júl", "Aug", "Szep", "Okt", "Nov", "Dec"],
        dayNames: ["Vasárnap", "Hétfő", "Kedd", "Szerda", "Csütörtök", "Péntek", "Szombat"],
        dayNamesShort: ["Vas", "Hét", "Ked", "Sze", "Csü", "Pén", "Szo"],
        dayNamesMin: ["V", "H", "K", "Sze", "Cs", "P", "Szo"],
        weekHeader: "Hét",
        dateFormat: "yy.mm.dd.",
        firstDay: 1,
        isRTL: !1,
        showMonthAfterYear: !0,
        yearSuffix: ""
    }), e.fullCalendar.lang("hu", {
        defaultButtonText: {month: "Hónap", week: "Hét", day: "Nap", list: "Napló"},
        allDayText: "Egész nap",
        eventLimitText: "további"
    })
});