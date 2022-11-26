<?php

namespace App\Text;


class text {

    public $language;

    public function language_button($tableTitle)
    {
        $copy = '<i class="fas fa-copy"></i>';
        $excel = '<i class="fas fa-file-excel"></i>';
        $pdf = '<i class="fas fa-file-pdf"></i>';
        $print = '<i class="fas fa-print"></i>';
        $eye = '<i class="fas fa-eye"></i>';
        return "buttons: {
                buttons: [
                    { extend: 'copyHtml5',
                        text: '$copy',
                        title: '$tableTitle',
                        titleAttr: 'Скопировать в буфер обмена',
                        exportOptions: {
                            columns: ':visible:Not(.not-exported)',
                            rows: ':visible',
                            format:{
                                header: function ( data, columnIdx ) {
                                    if(typeof export_format === 'function')
                                        return export_format(data, columnIdx);
                                    return data;
                                }
                            }
                        },
                    },
                    { extend: 'excelHtml5',
                        text: '$excel',
                        title: '$tableTitle',
                        titleAttr: 'Экспорт в Excel',
                        exportOptions: {
                            columns: ':visible:Not(.not-exported)',
                            rows: ':visible',
                            format:{
                                header: function ( data, columnIdx ) {
                                    if(typeof export_format === 'function')
                                        return export_format(data, columnIdx);
                                    return data;
                                }
                            }
                        },
                    },
                    { extend: 'pdfHtml5',
                        text: '$pdf',
                        title: '$tableTitle',
                        titleAttr: 'Экспорт в PDF',
                        orientation: 'landscape',
                        pageSize: 'LEGAL',
                        exportOptions: {
                            columns: ':visible:Not(.not-exported)',
                            rows: ':visible',
                            format:{
                                header: function ( data, columnIdx ) {
                                    if(typeof export_format === 'function')
                                        return export_format(data, columnIdx);
                                    return data;
                                }
                            }
                        },
                    },
                    { extend: 'print',
                        text: '$print',
                        title: '$tableTitle',
                        titleAttr: 'Распечатать',
                        exportOptions: {
                            columns: ':visible:Not(.not-exported)',
                            rows: ':visible',
                            format:{
                                header: function ( data, columnIdx ) {
                                    if(typeof export_format === 'function')
                                        return export_format(data, columnIdx);
                                    return data;
                                }
                            }
                        },
                    },
                    { extend: 'colvis',
                        text: '$eye',
                        titleAttr: 'Показать/скрыть колонки',
                        exportOptions: {
                            columns: ':visible:Not(.not-exported)',
                            rows: ':visible',
                        },
                    }
                ],
                dom: {
                    button: {
                        className: 'dt-button'
                    }
                }
            },";
    }
    public function language() : string
    {
        return '"language": {
                "lengthMenu": "Показать _MENU_ записей",
                "info":      "Показаны записи в диапазоне от _START_ до _END_ (В общем _TOTAL_)",
                "search":  "Поиск",
                "paginate": {
                    "previous": "Назад",
                    "next": "Дальше"
                },
                "searchBuilder": {
                    "add": "Добавить фильтр",
                    "button": {
                        "0": "Фильтр",
                        "_": "Фильтр"
                    },
                    "clearAll": "Сбросить",
                    "condition": "Условие",
                    "conditions": {
                        "date": {
                            "after": "После",
                            "before": "До",
                            "between": "Между",
                            "empty": "Пусто",
                            "equals": "Равно",
                            "not": "Не равно",
                            "notBetween": "Не между",
                            "notEmpty": "Не пусто"
                        },
                        "number": {
                            "between": "Между",
                            "empty": "Пусто",
                            "equals": "Равно",
                            "gt": "Больше чем",
                            "gte": "Больше чем равно",
                            "lt": "Меньше чем",
                            "lte": "Меньше чем равно",
                            "not": "Не равно",
                            "notBetween": "Не между",
                            "notEmpty": "Не пусто"
                        },
                        "string": {
                            "contains": "Содержит",
                            "empty": "Пусто",
                            "endsWith": "Заканчивается с",
                            "equals": "Равно",
                            "not": "Не равно",
                            "notEmpty": "Не пусто",
                            "startsWith": "Начинается с",
                            "notContains": "Не содержит",
                            "notStartsWith": "Не начинается с",
                            "notEndsWith": "Не заканчивается с"
                        },
                        "array": {
                            "without": "Без",
                            "notEmpty": "Не пусто",
                            "not": "Не равно",
                            "contains": "Содержит",
                            "empty": "Пусто",
                            "equals": "Равно"
                        }
                    },
                    "data": "Данные",
                    "deleteTitle": "Удалить правило фильтрации",
                    "leftTitle": "Критерии отставания",
                    "logicAnd": "И",
                    "logicOr": "Или",
                    "rightTitle": "Критерии отступа",
                    "title": {
                        "0": "Фильтр",
                        "_": "Фильтр"
                    },
                    "value": "Значение"
                },
            },';
    }

}

