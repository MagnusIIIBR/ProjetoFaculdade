!function (e) {
    "function" == typeof define && define.amd ? define(["jquery", "moment"], e) : e(jQuery, moment)
}(function (e, i) {
    function a(e, i, a, n) {
        return i ? "kelios sekundės" : n ? "kelių sekundžių" : "kelias sekundes"
    }

    function n(e, i, a, n) {
        return i ? s(a)[0] : n ? s(a)[1] : s(a)[2]
    }

    function t(e) {
        return 0 === e % 10 || e > 10 && 20 > e
    }

    function s(e) {
        return l[e].split("_")
    }

    function d(e, i, a, d) {
        var r = e + " ";
        return 1 === e ? r + n(e, i, a[0], d) : i ? r + (t(e) ? s(a)[1] : s(a)[0]) : d ? r + s(a)[1] : r + (t(e) ? s(a)[1] : s(a)[2])
    }

    function r(e, i) {
        var a = -1 === i.indexOf("dddd HH:mm"), n = _[e.day()];
        return a ? n : n.substring(0, n.length - 2) + "į"
    }

    var l = {
        m: "minutė_minutės_minutę",
        mm: "minutės_minučių_minutes",
        h: "valanda_valandos_valandą",
        hh: "valandos_valandų_valandas",
        d: "diena_dienos_dieną",
        dd: "dienos_dienų_dienas",
        M: "mėnuo_mėnesio_mėnesį",
        MM: "mėnesiai_mėnesių_mėnesius",
        y: "metai_metų_metus",
        yy: "metai_metų_metus"
    }, _ = "sekmadienis_pirmadienis_antradienis_trečiadienis_ketvirtadienis_penktadienis_šeštadienis".split("_");
    (i.defineLocale || i.lang).call(i, "lt", {
        months: "sausio_vasario_kovo_balandžio_gegužės_birželio_liepos_rugpjūčio_rugsėjo_spalio_lapkričio_gruodžio".split("_"),
        monthsShort: "sau_vas_kov_bal_geg_bir_lie_rgp_rgs_spa_lap_grd".split("_"),
        weekdays: r,
        weekdaysShort: "Sek_Pir_Ant_Tre_Ket_Pen_Šeš".split("_"),
        weekdaysMin: "S_P_A_T_K_Pn_Š".split("_"),
        longDateFormat: {
            LT: "HH:mm",
            LTS: "LT:ss",
            L: "YYYY-MM-DD",
            LL: "YYYY [m.] MMMM D [d.]",
            LLL: "YYYY [m.] MMMM D [d.], LT [val.]",
            LLLL: "YYYY [m.] MMMM D [d.], dddd, LT [val.]",
            l: "YYYY-MM-DD",
            ll: "YYYY [m.] MMMM D [d.]",
            lll: "YYYY [m.] MMMM D [d.], LT [val.]",
            llll: "YYYY [m.] MMMM D [d.], ddd, LT [val.]"
        },
        calendar: {
            sameDay: "[Šiandien] LT",
            nextDay: "[Rytoj] LT",
            nextWeek: "dddd LT",
            lastDay: "[Vakar] LT",
            lastWeek: "[Praėjusį] dddd LT",
            sameElse: "L"
        },
        relativeTime: {
            future: "po %s",
            past: "prieš %s",
            s: a,
            m: n,
            mm: d,
            h: n,
            hh: d,
            d: n,
            dd: d,
            M: n,
            MM: d,
            y: n,
            yy: d
        },
        ordinalParse: /\d{1,2}-oji/,
        ordinal: function (e) {
            return e + "-oji"
        },
        week: {dow: 1, doy: 4}
    }), e.fullCalendar.datepickerLang("lt", "lt", {
        closeText: "Uždaryti",
        prevText: "&#x3C;Atgal",
        nextText: "Pirmyn&#x3E;",
        currentText: "Šiandien",
        monthNames: ["Sausis", "Vasaris", "Kovas", "Balandis", "Gegužė", "Birželis", "Liepa", "Rugpjūtis", "Rugsėjis", "Spalis", "Lapkritis", "Gruodis"],
        monthNamesShort: ["Sau", "Vas", "Kov", "Bal", "Geg", "Bir", "Lie", "Rugp", "Rugs", "Spa", "Lap", "Gru"],
        dayNames: ["sekmadienis", "pirmadienis", "antradienis", "trečiadienis", "ketvirtadienis", "penktadienis", "šeštadienis"],
        dayNamesShort: ["sek", "pir", "ant", "tre", "ket", "pen", "šeš"],
        dayNamesMin: ["Se", "Pr", "An", "Tr", "Ke", "Pe", "Še"],
        weekHeader: "SAV",
        dateFormat: "yy-mm-dd",
        firstDay: 1,
        isRTL: !1,
        showMonthAfterYear: !0,
        yearSuffix: ""
    }), e.fullCalendar.lang("lt", {
        defaultButtonText: {
            month: "Mėnuo",
            week: "Savaitė",
            day: "Diena",
            list: "Darbotvarkė"
        }, allDayText: "Visą dieną", eventLimitText: "daugiau"
    })
});