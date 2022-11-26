<script>
    $(document).ready(function() {
        $.fn.dataTable.moment('DD-MM-YYYY');

        $('#example').DataTable( {

            stateSave: true,
            order: [[0, 'desc']],
            "lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "{{ __('Все') }}"] ] ,
            pageLength: {{$pageLength}},
            {!! $languageRu !!},
            dom: {{$dom}},
            ajax: "{{$getData}}",
            columns: columns,
            buttons: {
                buttons: [
                    { extend: 'copyHtml5',
                        text: '<i class="fas fa-copy"></i>',
                        title: '{{$tableTitle}}',
                        titleAttr: 'Скопировать в буфер обмена',
                        exportOptions: {
                            columns: ':visible:Not(.not-exported)',
                            rows: ':visible',
                            format:{
                                header: function ( data, columnIdx ) {
                                    if(typeof export_format === "function")
                                        return export_format(data, columnIdx);
                                    return data;
                                }
                            }
                        },
                    },
                    { extend: 'excelHtml5',
                        text: '<i class="fas fa-file-excel"></i>',
                        title: '{{$tableTitle}}',
                        titleAttr: 'Экспорт в Excel',
                        exportOptions: {
                            columns: ':visible:Not(.not-exported)',
                            rows: ':visible',
                            format:{
                                header: function ( data, columnIdx ) {
                                    if(typeof export_format === "function")
                                        return export_format(data, columnIdx);
                                    return data;
                                }
                            }
                        },
                    },
                    { extend: 'pdfHtml5',
                        text: '<i class="fas fa-file-pdf"></i>',
                        title: '{{$tableTitle}}',
                        titleAttr: 'Экспорт в PDF',
                        orientation: 'landscape',
                        pageSize: 'LEGAL',
                        exportOptions: {
                            columns: ':visible:Not(.not-exported)',
                            rows: ':visible',
                            format:{
                                header: function ( data, columnIdx ) {
                                    if(typeof export_format === "function")
                                        return export_format(data, columnIdx);
                                    return data;
                                }
                            }
                        },
                    },
                    { extend: 'print',
                        text: '<i class="fas fa-print"></i>',
                        title: '{{$tableTitle}}',
                        titleAttr: 'Распечатать',
                        exportOptions: {
                            columns: ':visible:Not(.not-exported)',
                            rows: ':visible',
                            format:{
                                header: function ( data, columnIdx ) {
                                    if(typeof export_format === "function")
                                        return export_format(data, columnIdx);
                                    return data;
                                }
                            }
                        },
                    },
                    { extend: 'colvis',
                        text: '<i class="fas fa-eye"></i>',
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
            },

        });
        var divTitle = ''
            + '<div class="col-12 text-center text-md-left pt-4 pb-4 display-2" style="text-align: center !important;">'
            + '<h1 class="text-dark">' + '{{$tableTitle}}' + '</h1>'
            + '</div>';

        $("#fortext").append(divTitle);

    });
</script>
