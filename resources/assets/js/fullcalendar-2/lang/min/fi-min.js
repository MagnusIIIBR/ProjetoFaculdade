!function (a) {
    "function" == typeof define && define.amd ? define(["jquery", "moment"], a) : a(jQuery, moment)
}(function (a, e) {
    function u(a, e, u, t) {
        var n = "";
        switch (u) {
            case"s":
                return t ? "muutaman sekunnin" : "muutama sekunti";
            case"m":
                return t ? "minuutin" : "minuutti";
            case"mm":
                n = t ? "minuutin" : "minuuttia";
                break;
            case"h":
                return t ? "tunnin" : "tunti";
            case"hh":
                n = t ? "tunnin" : "tuntia";
                break;
            case"d":
                return t ? "päivän" : "päivä";
            case"dd":
                n = t ? "päivän" : "päivää";
                break;
            case"M":
                return t ? "kuukauden" : "kuukausi";
            case"MM":
                n = t ? "kuukauden" : "kuukautta";
                break;
            case"y":
                return t ? "vuoden" : "vuosi";
            case"yy":
                n = t ? "vuoden" : "vuotta"
        }
        return n = i(a, t) + " " + n
    }

    function i(a, e) {
        return 10 > a ? e ? n[a] : t[a] : a
    }

    var t = "nolla yksi kaksi kolme neljä viisi kuusi seitsemän kahdeksan yhdeksän".split(" "), n = ["nolla", "yhden", "kahden", "kolmen", "neljän", "viiden", "kuuden", t[7], t[8], t[9]];
    (e.defineLocale || e.lang).call(e, "fi", {
        months: "tammikuu_helmikuu_maaliskuu_huhtikuu_toukokuu_kesäkuu_heinäkuu_elokuu_syyskuu_lokakuu_marraskuu_joulukuu".split("_"),
        monthsShort: "tammi_helmi_maalis_huhti_touko_kesä_heinä_elo_syys_loka_marras_joulu".split("_"),
        weekdays: "sunnuntai_maanantai_tiistai_keskiviikko_torstai_perjantai_lauantai".split("_"),
        weekdaysShort: "su_ma_ti_ke_to_pe_la".split("_"),
        weekdaysMin: "su_ma_ti_ke_to_pe_la".split("_"),
        longDateFormat: {
            LT: "HH.mm",
            LTS: "HH.mm.ss",
            L: "DD.MM.YYYY",
            LL: "Do MMMM[ta] YYYY",
            LLL: "Do MMMM[ta] YYYY, [klo] LT",
            LLLL: "dddd, Do MMMM[ta] YYYY, [klo] LT",
            l: "D.M.YYYY",
            ll: "Do MMM YYYY",
            lll: "Do MMM YYYY, [klo] LT",
            llll: "ddd, Do MMM YYYY, [klo] LT"
        },
        calendar: {
            sameDay: "[tänään] [klo] LT",
            nextDay: "[huomenna] [klo] LT",
            nextWeek: "dddd [klo] LT",
            lastDay: "[eilen] [klo] LT",
            lastWeek: "[viime] dddd[na] [klo] LT",
            sameElse: "L"
        },
        relativeTime: {
            future: "%s päästä",
            past: "%s sitten",
            s: u,
            m: u,
            mm: u,
            h: u,
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
    }), a.fullCalendar.datepickerLang("fi", "fi", {
        closeText: "Sulje",
        prevText: "&#xAB;Edellinen",
        nextText: "Seuraava&#xBB;",
        currentText: "Tänään",
        monthNames: ["Tammikuu", "Helmikuu", "Maaliskuu", "Huhtikuu", "Toukokuu", "Kesäkuu", "Heinäkuu", "Elokuu", "Syyskuu", "Lokakuu", "Marraskuu", "Joulukuu"],
        monthNamesShort: ["Tammi", "Helmi", "Maalis", "Huhti", "Touko", "Kesä", "Heinä", "Elo", "Syys", "Loka", "Marras", "Joulu"],
        dayNamesShort: ["Su", "Ma", "Ti", "Ke", "To", "Pe", "La"],
        dayNames: ["Sunnuntai", "Maanantai", "Tiistai", "Keskiviikko", "Torstai", "Perjantai", "Lauantai"],
        dayNamesMin: ["Su", "Ma", "Ti", "Ke", "To", "Pe", "La"],
        weekHeader: "Vk",
        dateFormat: "d.m.yy",
        firstDay: 1,
        isRTL: !1,
        showMonthAfterYear: !1,
        yearSuffix: ""
    }), a.fullCalendar.lang("fi", {
        defaultButtonText: {
            month: "Kuukausi",
            week: "Viikko",
            day: "Päivä",
            list: "Tapahtumat"
        }, allDayText: "Koko päivä", eventLimitText: "lisää"
    })
});