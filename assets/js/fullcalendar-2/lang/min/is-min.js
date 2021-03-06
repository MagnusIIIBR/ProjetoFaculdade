!function (a) {
    "function" == typeof define && define.amd ? define(["jquery", "moment"], a) : a(jQuery, moment)
}(function (a, e) {
    function r(a) {
        return 11 === a % 100 ? !0 : 1 === a % 10 ? !1 : !0
    }

    function u(a, e, u, n) {
        var t = a + " ";
        switch (u) {
            case"s":
                return e || n ? "nokkrar sekúndur" : "nokkrum sekúndum";
            case"m":
                return e ? "mínúta" : "mínútu";
            case"mm":
                return r(a) ? t + (e || n ? "mínútur" : "mínútum") : e ? t + "mínúta" : t + "mínútu";
            case"hh":
                return r(a) ? t + (e || n ? "klukkustundir" : "klukkustundum") : t + "klukkustund";
            case"d":
                return e ? "dagur" : n ? "dag" : "degi";
            case"dd":
                return r(a) ? e ? t + "dagar" : t + (n ? "daga" : "dögum") : e ? t + "dagur" : t + (n ? "dag" : "degi");
            case"M":
                return e ? "mánuður" : n ? "mánuð" : "mánuði";
            case"MM":
                return r(a) ? e ? t + "mánuðir" : t + (n ? "mánuði" : "mánuðum") : e ? t + "mánuður" : t + (n ? "mánuð" : "mánuði");
            case"y":
                return e || n ? "ár" : "ári";
            case"yy":
                return r(a) ? t + (e || n ? "ár" : "árum") : t + (e || n ? "ár" : "ári")
        }
    }

    (e.defineLocale || e.lang).call(e, "is", {
        months: "janúar_febrúar_mars_apríl_maí_júní_júlí_ágúst_september_október_nóvember_desember".split("_"),
        monthsShort: "jan_feb_mar_apr_maí_jún_júl_ágú_sep_okt_nóv_des".split("_"),
        weekdays: "sunnudagur_mánudagur_þriðjudagur_miðvikudagur_fimmtudagur_föstudagur_laugardagur".split("_"),
        weekdaysShort: "sun_mán_þri_mið_fim_fös_lau".split("_"),
        weekdaysMin: "Su_Má_Þr_Mi_Fi_Fö_La".split("_"),
        longDateFormat: {
            LT: "H:mm",
            LTS: "LT:ss",
            L: "DD/MM/YYYY",
            LL: "D. MMMM YYYY",
            LLL: "D. MMMM YYYY [kl.] LT",
            LLLL: "dddd, D. MMMM YYYY [kl.] LT"
        },
        calendar: {
            sameDay: "[í dag kl.] LT",
            nextDay: "[á morgun kl.] LT",
            nextWeek: "dddd [kl.] LT",
            lastDay: "[í gær kl.] LT",
            lastWeek: "[síðasta] dddd [kl.] LT",
            sameElse: "L"
        },
        relativeTime: {
            future: "eftir %s",
            past: "fyrir %s síðan",
            s: u,
            m: u,
            mm: u,
            h: "klukkustund",
            hh: u,
            d: u,
            dd: u,
            M: u,
            MM: u,
            y: u,
            yy: u
        },
        ordinalParse: /\d{1,2}\./,
        ordinal: "%d.",
        week: {dow: 1, doy: 4}
    }), a.fullCalendar.datepickerLang("is", "is", {
        closeText: "Loka",
        prevText: "&#x3C; Fyrri",
        nextText: "Næsti &#x3E;",
        currentText: "Í dag",
        monthNames: ["Janúar", "Febrúar", "Mars", "Apríl", "Maí", "Júní", "Júlí", "Ágúst", "September", "Október", "Nóvember", "Desember"],
        monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "Maí", "Jún", "Júl", "Ágú", "Sep", "Okt", "Nóv", "Des"],
        dayNames: ["Sunnudagur", "Mánudagur", "Þriðjudagur", "Miðvikudagur", "Fimmtudagur", "Föstudagur", "Laugardagur"],
        dayNamesShort: ["Sun", "Mán", "Þri", "Mið", "Fim", "Fös", "Lau"],
        dayNamesMin: ["Su", "Má", "Þr", "Mi", "Fi", "Fö", "La"],
        weekHeader: "Vika",
        dateFormat: "dd.mm.yy",
        firstDay: 0,
        isRTL: !1,
        showMonthAfterYear: !1,
        yearSuffix: ""
    }), a.fullCalendar.lang("is", {
        defaultButtonText: {month: "Mánuður", week: "Vika", day: "Dagur", list: "Dagskrá"},
        allDayHtml: "Allan<br/>daginn",
        eventLimitText: "meira"
    })
});