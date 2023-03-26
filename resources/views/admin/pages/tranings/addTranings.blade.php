@extends('admin.master')
@section('content')
    <!-- MAIN PAGE -->

    <section class="mainPage">
        <div class="container-lg">
            <div class="page_head">
                <div class="page_head--header page_head--header_after">
                    Təlimlər
                </div>
                <div class="page_head--description">
                    Əlavə et
                </div>
            </div>
            <form id="aboutUs" class="section_articleInner_body_content--description" enctype="multipart/form-data" method="post" action="{{route('admin.save-tranings')}}">
                {{csrf_field()}}
                <div class="page_content">
                    <form class="section_articleInner_body_content--description">
                        <div class="form-group required">
                            <label class="customLabel" for="name">Təlim adı</label>
                            <input class="formControl" name="name" value="{{$data->name ?? ''}}" id="title" type="text" placeholder="Təlim adı" required="">
                        </div>
                        <div class="form-group required">
                            <label class="customLabel" for="old_price">Qiymət</label>
                            <input class="formControl" name="old_price" value="{{$data->old_price ?? ''}}" id="title" type="number" placeholder="Qiymət" required="">
                        </div>
                        <div class="form-group required">
                            <label class="customLabel" for="price">Endirimli qiymət</label>
                            <input class="formControl" name="price" value="{{$data->price ?? ''}}" id="title" type="number" placeholder="Qiymət" required="">
                        </div>
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
                            <label class="customLabel" for="course_lang">Təlim dili</label>
                            <input class="formControl" name="course_lang" value="{{$data->course_lang ?? ''}}" id="title" type="text" placeholder="Təlim dili" required="">
                        </div>
                        <div class="form-group required">
                            <label class="customLabel" for="course">Kurs</label>
                            <select class="customSelect" name="course" id="course" required="" title="Kurs">
                                @foreach($course as $val)

                                    <option {{($val->id == $data->category) ? 'selected' : ''}}  value="{{$val->id ?? ''}}">{{$val->name ?? ''}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group required">
                            <label class="customLabel" for="duration">Təlim müddəti</label>
                            <input class="formControl" name="duration" value="{{$data->duration ?? ''}}" id="title" type="text" placeholder="Təlim müddəti" required="">
                        </div>
                        <div class="form-group required">
                            <label class="customLabel" for="schedule">Təlim günləri</label>
                            <input class="formControl" name="schedule" value="{{$data->schedule ?? ''}}" id="title" type="text" placeholder="Təlim günləri" required="">
                        </div>
                        <div class="form-group required">
                            <label class="customLabel" for="editor">Məlumat</label>
                            <textarea name="info" id="editor">{{$data->info ?? ''}}</textarea>
                        </div>

                        <div class="form-group required">
                            <label class="customLabel" for="cert_editor">Sertfikat haqqında məlumat</label>
                            <textarea name="cert_info" id="cert_editor">{{$data->cert_info ?? ''}}</textarea>
                        </div>
                        <div class="form-group required">
                            <label class="customLabel" for="cert_editor">Sertfikat nümunə şəkil</label>
                            <div class="col-lg-6">
                                <button class="customBtn quickBtn image_selector" type="button" data-toggle="modal" data-target="#elfinderModal"
                                        data-id="newsImage">
                                    Şəkil seç
                                </button>
                                <button class=" customBtn quickBtn quickBtn--minor imageRemove" type="button" data-id="newsImage"
                                        data-removeId="newsImageRemove" data-show="{{!empty($data->cert_img ?? '') ? 'true' : 'false'}}">
                                    Şəkli sil
                                </button>
                                <img class="elfinderImage" src="{{$data->cert_img ?? ''}}" id="newsImagePreview"/>
                                <input type="hidden" value="{{$data->cert_img ?? ''}}"
                                       name="newsImage" id="newsImageInput"
                                       class="form-control" required=""/>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="customLabel" for="employee">Təlimçi</label>
                            <select class="customSelect" name="employee" id="employee" required="" title="Kurs">
                                @foreach($employee as $val)
                                    <option {{($val->id == $data->employee_item_id) ? 'selected' : ''}} value="{{$val->id ?? ''}}">{{$val->name ?? ''}} {{$val->surname ?? ''}} ({{$val->position ?? ''}})</option>
                                @endforeach
                            </select>
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

            if ({{$data->id ?? 0}} > 0 || '{{$data->language ?? ''}}' != '') {
                $('#aboutUs').append('<input type="hidden" name="item_id" value="{{$data->item_id ?? 0}}">');
                $('#aboutUs').append('<input type="hidden" name="lang" value="{{$data->language ?? ''}}">');
            }

            $('#aboutUs').get(0).submit();
        });

        CKEDITOR.replace('editor', {
            filebrowserImageBrowseUrl: '{{route('elfinder.ckeditor')}}',
            filebrowserBrowseUrl: '{{route('elfinder.ckeditor')}}'
        })

        CKEDITOR.replace('cert_editor', {
            filebrowserImageBrowseUrl: '{{route('elfinder.ckeditor')}}',
            filebrowserBrowseUrl: '{{route('elfinder.ckeditor')}}'
        })
        initSample();
    </script>
@endsection
