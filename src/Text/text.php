<?php

namespace App\Text;


class text {

public $language_ru;
public function __construct()
{
    $this->language_ru = $this->language_ru();
}

public function language_ru() : string
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
            }';
}

}

