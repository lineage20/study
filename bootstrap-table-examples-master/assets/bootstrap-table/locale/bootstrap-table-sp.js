/*
 * bootstrap-table - v1.11.0 - 2016-07-02
 * https://github.com/wenzhixin/bootstrap-table
 * Copyright (c) 2016 zhixin wen
 * Licensed MIT License
 */
! function(a) { "use strict";
    a.fn.bootstrapTable.locales["SP"] = { formatLoadingMessage: function() {
            return "Está cargada con los esfuerzos en los datos, por favor, espera……" }, formatRecordsPerPage: function(a) {
            return "Numeración de mostrar " + a + " artículo Registros de" }, formatShowingRows: function(a, b, c) {
            return "que el " + a + " a el " + b + " artículo Registros de，articulo de registros " + c + " artículo Registros de" }, formatSearch: function() {
            return "la búsqueda" }, formatNoMatches: function() {
            return "no coincide con la de encontrar registros" }, formatPaginationSwitch: function() {
            return "Escondido/muestra paginación" }, formatRefresh: function() {
            return "renovar" }, formatToggle: function() {
            return "cambie" }, formatColumns: function() {
            return "en" }, formatExport: function() {
            return "los datos de exportación" }, formatClearFilters: function() {
            return "vacie el filtro" } }, a.extend(a.fn.bootstrapTable.defaults, a.fn.bootstrapTable.locales["SP"]) }(jQuery);
