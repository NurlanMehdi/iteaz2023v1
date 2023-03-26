@extends('admin.master')
@section('content')
    <!-- MAIN PAGE -->

    <section class="mainPage">
        <div class="container-lg">
            <div class="page_head">
                <div class="page_head--header page_head--header_after">
                    Karyera
                </div>
                <div class="page_head--description">
                    Əlavə et
                </div>
            </div>
            <form id="aboutUs" class="section_articleInner_body_content--description" enctype="multipart/form-data" method="post" action="{{route('admin.save-career')}}">
                {{csrf_field()}}
                <div class="page_content">
                    <form class="section_articleInner_body_content--description">
                        <div class="form-group required">
                            <label class="customLabel" for="status">Status</label>

                            <select class="customSelect" name="status" id="page_status" required="" title="Status">
                                <option value="0" {{(($data->status ?? '') == '0') ? 'selected' : ''}}>Gizli</option>
                                <option value="1" {{(($data->status ?? '') == '1') ? 'selected' : ''}}>Görünən</option>
                            </select>
                        </div>
                        <div class="form-group required">
                            <label class="customLabel" for="language">Dil</label>
                            <select class="customSelect" {{(($data->language?? '') != '') ? 'readonly' : ''}} name="language" id="language" required="" title="Dil">
                                @if(($data->language?? 1)== 'az')
                                    <option value="az" selected>Az</option>
                                @elseif(($data->language?? 1) == 'en')
                                    <option value="en" selected>En</option>
                                @else
                                    <option value="az">Az</option>
                                    <option value="en">En</option>

                                @endif


                            </select>
                        </div>
                        <div class="form-group required">
                            <label class="customLabel" for="work_hours">İş saatı</label>
                            <select class="customSelect" {{(($data->work_hours ?? '') != '') ? 'readonly' : ''}} name="work_hours" id="work_hours" required="" title="İş saatı">
                                @if(($data->work_hours ?? '')== 0)
                                    <option value="0" selected>Part time</option>
                                @elseif(($data->work_hours ?? '') == 1)
                                    <option value="1" selected>Full time</option>
                                @else
                                    <option value="0">Part time</option>
                                    <option value="1">Full time</option>

                                @endif
                            </select>
                        </div>
                        <div class="form-group required">
                            <label class="customLabel" for="name">Başlıq</label>
                            <input class="formControl" name="name" value="{{$data->name ?? ''}}" id="title" type="text" placeholder="Adı" required="">
                        </div>
                        <div class="form-group required">
                            <label class="customLabel" for="editor">Təsvir</label>
                            <textarea name="info" id="editor">{{$data->info ?? ''}}</textarea>
                        </div>
                        <div class="form-group pt-5">
                            <hr class="mt-5"/>
                            <div class="quickLinks">
                                <button type="submit" class="customBtn quickBtn save-btn">
                                    Əlavə et
                                </button>
                                <a href="{{route('admin.company')}}" class="customBtn applyBtn-trash">
                                    Ləğv et
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </form>

        </div>
    </section>
    <!-- MAIN PAGE END -->
    <div class="modal fade" id="elfinderModal" tabindex="-1" role="dialog" aria-labelledby="elfinderModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true " class="icon-cross"></span></button>
            <div class="modal-content">
                <div id="elfinder"></div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $(document).on('click', '.imageRemove', function () {
                var id = $(this).attr('data-id');
                if (id) {
                    document.getElementById(id + 'Input').value = '';
                    document.getElementById(id + 'Preview').src = '';
                } else {
                    document.getElementById('elfinderInput').value = '';
                    document.getElementById('elfinderImagePreview').src = '';
                }
                $(this).hide()
            })
        })

        $("document").ready(function () {
            $('.image_selector').click(function () {
                var id = $(this).attr('data-id');
                $('#elfinder').elfinder({
                    url: "{{route('elfinder.connector')}}",
                    customData: {
                        _token: "{{csrf_token()}}"
                    },
                    height: 600,
                    modal: true,
                    title: "Select your file",
                    zIndex: 99999,
                    resizable: true,
                    commandsOptions: {
                        getfile: {
                            oncomplete: 'destroy',
                        }
                    },
                    getFileCallback: function (file) {
                        if (id) {
                            document.getElementById(id + 'Input').value = file.url;
                            document.getElementById(id + 'Preview').src = file.url;
                            $(`[data-removeId="${id}Remove"]`).show();
                        } else {
                            document.getElementById('elfinderImage').value = file.url;
                            document.getElementById('elfinderImagePreview').src = file.url;
                            $(`[data-removeId="elfinderImageRemove"]`).show();
                        }
                        var alert = document.querySelector(".modal-dialog"),
                            okButton = alert.getElementsByClassName("close");
                        $(okButton).trigger("click");
                    }
                });
            });
        });

        $('.save-btn').on('click',function (e) {
            e.preventDefault();
            e.stopPropagation();

            if ({{$data->id ?? 0}} > 0 || '{{$data->language?? ''}}' != '') {
                $('#aboutUs').append('<input type="hidden" name="item_id" value="{{$data->item_id ?? 0}}">');
                $('#aboutUs').append('<input type="hidden" name="lang" value="{{$data->language?? ''}}">');
            }

            $('#aboutUs').get(0).submit();
        });

        CKEDITOR.replace('editor', {
            filebrowserImageBrowseUrl: '{{route('elfinder.ckeditor')}}',
            filebrowserBrowseUrl: '{{route('elfinder.ckeditor')}}'
        })
        initSample();
    </script>
@endsection
