!function (e) {
    "function" == typeof define && define.amd ? define(["jquery", "moment"], e) : e(jQuery, moment)
}(function (e, t) {
    function r(e) {
        return e > 1 && 5 > e
    }

    function a(e, t, a, n) {
        var o = e + " ";
        switch (a) {
            case"s":
                return t || n ? "pár sekúnd" : "pár sekundami";
            case"m":
                return t ? "minúta" : n ? "minútu" : "minútou";
            case"mm":
                return t || n ? o + (r(e) ? "minúty" : "minút") : o + "minútami";
            case"h":
                return t ? "hodina" : n ? "hodinu" : "hodinou";
            case"hh":
                return t || n ? o + (r(e) ? "hodiny" : "hodín") : o + "hodinami";
            case"d":
                return t || n ? "deň" : "dňom";
            case"dd":
                return t || n ? o + (r(e) ? "dni" : "dní") : o + "dňami";
            case"M":
                return t || n ? "mesiac" : "mesiacom";
            case"MM":
                return t || n ? o + (r(e) ? "mesiace" : "mesiacov") : o + "mesiacmi";
            case"y":
                return t || n ? "rok" : "rokom";
            case"yy":
                return t || n ? o + (r(e) ? "roky" : "rokov") : o + "rokmi"
        }
    }

    var n = "január_február_marec_apríl_máj_jún_júl_august_september_október_november_december".split("_"), o = "jan_feb_mar_apr_máj_jún_júl_aug_sep_okt_nov_dec".split("_");
    (t.defineLocale || t.lang).call(t, "sk", {
        months: n,
        monthsShort: o,
        monthsParse: function (e, t) {
            var r, a = [];
            for (r = 0; 12 > r; r++)a[r] = RegExp("^" + e[r] + "$|^" + t[r] + "$", "i");
            return a
        }(n, o),
        weekdays: "nedeľa_pondelok_utorok_streda_štvrtok_piatok_sobota".split("_"),
        weekdaysShort: "ne_po_ut_st_št_pi_so".split("_"),
        weekdaysMin: "ne_po_ut_st_št_pi_so".split("_"),
        longDateFormat: {
            LT: "H:mm",
            LTS: "LT:ss",
            L: "DD.MM.YYYY",
            LL: "D. MMMM YYYY",
            LLL: "D. MMMM YYYY LT",
            LLLL: "dddd D. MMMM YYYY LT"
        },
        calendar: {
            sameDay: "[dnes o] LT", nextDay: "[zajtra o] LT", nextWeek: function () {
                switch (this.day()) {
                    case 0:
                        return "[v nedeľu o] LT";
                    case 1:
                    case 2:
                        return "[v] dddd [o] LT";
                    case 3:
                        return "[v stredu o] LT";
                    case 4:
                        return "[vo štvrtok o] LT";
                    case 5:
                        return "[v piatok o] LT";
                    case 6:
                        return "[v sobotu o] LT"
                }
            }, lastDay: "[včera o] LT", lastWeek: function () {
                switch (this.day()) {
                    case 0:
                        return "[minulú nedeľu o] LT";
                    case 1:
                    case 2:
                        return "[minulý] dddd [o] LT";
                    case 3:
                        return "[minulú stredu o] LT";
                    case 4:
                    case 5:
                        return "[minulý] dddd [o] LT";
                    case 6:
                        return "[minulú sobotu o] LT"
                }
            }, sameElse: "L"
        },
        relativeTime: {
            future: "za %s",
            past: "pred %s",
            s: a,
            m: a,
            mm: a,
            h: a,
            hh: a,
            d: a,
            dd: a,
            M: a,
            MM: a,
            y: a,
            yy: a
        },
        ordinalParse: /\d{1,2}\./,
        ordinal: "%d.",
        week: {dow: 1, doy: 4}
    }), e.fullCalendar.datepickerLang("sk", "sk", {
        closeText: "Zavrieť",
        prevText: "&#x3C;Predchádzajúci",
        nextText: "Nasledujúci&#x3E;",
        currentText: "Dnes",
        monthNames: ["január", "február", "marec", "apríl", "máj", "jún", "júl", "august", "september", "október", "november", "december"],
        monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "Máj", "Jún", "Júl", "Aug", "Sep", "Okt", "Nov", "Dec"],
        dayNames: ["nedeľa", "pondelok", "utorok", "streda", "štvrtok", "piatok", "sobota"],
        dayNamesShort: ["Ned", "Pon", "Uto", "Str", "Štv", "Pia", "Sob"],
        dayNamesMin: ["Ne", "Po", "Ut", "St", "Št", "Pia", "So"],
        weekHeader: "Ty",
        dateFormat: "dd.mm.yy",
        firstDay: 1,
        isRTL: !1,
        showMonthAfterYear: !1,
        yearSuffix: ""
    }), e.fullCalendar.lang("sk", {
        defaultButtonText: {month: "Mesiac", week: "Týždeň", day: "Deň", list: "Rozvrh"},
        allDayText: "Celý deň",
        eventLimitText: function (e) {
            return "+ďalšie: " + e
        }
    })
});