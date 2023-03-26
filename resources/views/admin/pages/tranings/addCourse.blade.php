@extends('admin.master')
@section('content')
    <!-- MAIN PAGE -->

    <section class="mainPage">
        <div class="container-lg">
            <div class="page_head">
                <div class="page_head--header page_head--header_after">
                    Resurslar
                </div>
                <div class="page_head--description">
                    Əlavə et
                </div>
            </div>
            <form id="aboutUs" class="section_articleInner_body_content--description" enctype="multipart/form-data" method="post" action="{{route('admin.save-course')}}">
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
                            <select class="customSelect" {{(($data->language ?? '') != '') ? 'readonly' : ''}} name="language" id="language" required="" title="Dil">
                                @if(($data->language ?? 1)== 'az')
                                    <option value="az" selected>Az</option>
                                @elseif(($data->language ?? 1) == 'en')
                                    <option value="en" selected>En</option>
                                @else
                                    <option value="az">Az</option>
                                    <option value="en">En</option>

                                @endif


                            </select>
                        </div>

                        <div class="form-group required">
                            <label class="customLabel" for="name">Başlıq</label>
                            <input class="formControl" name="name" value="{{$data->name ?? ''}}" id="title" type="text" placeholder="Adı" required="">
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

@endsection
@section('js')
    <script>

        $('.save-btn').on('click',function (e) {
            e.preventDefault();
            e.stopPropagation();

            if ({{$data->id ?? 0}} > 0 || '{{$data->language ?? ''}}' != '') {
                $('#aboutUs').append('<input type="hidden" name="item_id" value="{{$data->item_id ?? 0}}">');
                $('#aboutUs').append('<input type="hidden" name="lang" value="{{$data->language ?? ''}}">');
            }

            $('#aboutUs').get(0).submit();
        });
    </script>
@endsection
