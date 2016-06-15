!function (e) {
    "function" == typeof define && define.amd ? define(["jquery", "moment"], e) : e(jQuery, moment)
}(function (e, a) {
    function t(e, a, t) {
        var n = e + " ";
        switch (t) {
            case"m":
                return a ? "ena minuta" : "eno minuto";
            case"mm":
                return n += 1 === e ? "minuta" : 2 === e ? "minuti" : 3 === e || 4 === e ? "minute" : "minut";
            case"h":
                return a ? "ena ura" : "eno uro";
            case"hh":
                return n += 1 === e ? "ura" : 2 === e ? "uri" : 3 === e || 4 === e ? "ure" : "ur";
            case"dd":
                return n += 1 === e ? "dan" : "dni";
            case"MM":
                return n += 1 === e ? "mesec" : 2 === e ? "meseca" : 3 === e || 4 === e ? "mesece" : "mesecev";
            case"yy":
                return n += 1 === e ? "leto" : 2 === e ? "leti" : 3 === e || 4 === e ? "leta" : "let"
        }
    }

    (a.defineLocale || a.lang).call(a, "sl", {
        months: "januar_februar_marec_april_maj_junij_julij_avgust_september_oktober_november_december".split("_"),
        monthsShort: "jan._feb._mar._apr._maj._jun._jul._avg._sep._okt._nov._dec.".split("_"),
        weekdays: "nedelja_ponedeljek_torek_sreda_četrtek_petek_sobota".split("_"),
        weekdaysShort: "ned._pon._tor._sre._čet._pet._sob.".split("_"),
        weekdaysMin: "ne_po_to_sr_če_pe_so".split("_"),
        longDateFormat: {
            LT: "H:mm",
            LTS: "LT:ss",
            L: "DD. MM. YYYY",
            LL: "D. MMMM YYYY",
            LLL: "D. MMMM YYYY LT",
            LLLL: "dddd, D. MMMM YYYY LT"
        },
        calendar: {
            sameDay: "[danes ob] LT", nextDay: "[jutri ob] LT", nextWeek: function () {
                switch (this.day()) {
                    case 0:
                        return "[v] [nedeljo] [ob] LT";
                    case 3:
                        return "[v] [sredo] [ob] LT";
                    case 6:
                        return "[v] [soboto] [ob] LT";
                    case 1:
                    case 2:
                    case 4:
                    case 5:
                        return "[v] dddd [ob] LT"
                }
            }, lastDay: "[včeraj ob] LT", lastWeek: function () {
                switch (this.day()) {
                    case 0:
                    case 3:
                    case 6:
                        return "[prejšnja] dddd [ob] LT";
                    case 1:
                    case 2:
                    case 4:
                    case 5:
                        return "[prejšnji] dddd [ob] LT"
                }
            }, sameElse: "L"
        },
        relativeTime: {
            future: "čez %s",
            past: "%s nazaj",
            s: "nekaj sekund",
            m: t,
            mm: t,
            h: t,
            hh: t,
            d: "en dan",
            dd: t,
            M: "en mesec",
            MM: t,
            y: "eno leto",
            yy: t
        },
        ordinalParse: /\d{1,2}\./,
        ordinal: "%d.",
        week: {dow: 1, doy: 7}
    }), e.fullCalendar.datepickerLang("sl", "sl", {
        closeText: "Zapri",
        prevText: "&#x3C;Prejšnji",
        nextText: "Naslednji&#x3E;",
        currentText: "Trenutni",
        monthNames: ["Januar", "Februar", "Marec", "April", "Maj", "Junij", "Julij", "Avgust", "September", "Oktober", "November", "December"],
        monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "Maj", "Jun", "Jul", "Avg", "Sep", "Okt", "Nov", "Dec"],
        dayNames: ["Nedelja", "Ponedeljek", "Torek", "Sreda", "Četrtek", "Petek", "Sobota"],
        dayNamesShort: ["Ned", "Pon", "Tor", "Sre", "Čet", "Pet", "Sob"],
        dayNamesMin: ["Ne", "Po", "To", "Sr", "Če", "Pe", "So"],
        weekHeader: "Teden",
        dateFormat: "dd.mm.yy",
        firstDay: 1,
        isRTL: !1,
        showMonthAfterYear: !1,
        yearSuffix: ""
    }), e.fullCalendar.lang("sl", {
        defaultButtonText: {month: "Mesec", week: "Teden", day: "Dan", list: "Dnevni red"},
        allDayText: "Ves dan",
        eventLimitText: "več"
    })
});