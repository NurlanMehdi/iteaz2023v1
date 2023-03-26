@extends('admin.master')
@section('content')
    <!-- MAIN PAGE -->
    <section class="mainPage">
        <div class="container-lg">
            <div class="page_head">
                <div class="page_head--header page_head--header_after">
                    Təlimlər
                </div>
                <div class="quickLinks">
                    <a href="{{route('admin.add-course',[0,'new'])}}" class="customBtn quickBtn">
                        Kurs əlavə et
                    </a>
                </div>
            </div>
            <div class="page_content">
                <div class="table-responsive">
                    <table class="table dataTable table-borderless">
                        <thead>
                        <tr>
                            <th>Adı</th>
                            <th>Status</th>
                            <th>Dil</th>
                            <th class="no-sort" style="width: 30px;">Silmək</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($course as $info)

                            <tr>
                                <td>{{$info->name ?? ''}}</td>
                                <td>{{($info->status ?? '') == 1 ? 'Görünən':'Gizli'}}</td>
                                <td>
                                    <div class="buttonGroup buttonGroup--table">
                                        <button class="customBtn applyBtn applyBtn-white applyBtn-squared_lang" aria-label="lang edit"
                                                data-container="body" data-placement="top" data-toggle="popover" data-html="true" title=""
                                                data-content=
                                                '
                                            <div class="buttonGroup buttonGroup--table">
                                                @if(in_array('az',$info->language))
                                                    <a href="{{route('admin.add-course',[$info->item_id,'edit','az'])}}" class="customBtn quickBtn">Düzəliş</a>
                                                @else
                                                    <a href="{{route('admin.add-course',[$info->item_id,'new-translate','az'])}}" class="customBtn quickBtn">Əlavə et</a>
                                                @endif
                                                    <a href="{{route('admin.trash-course-translate',[$info->id,'course'])}}" class="customBtn quickBtn">Remove</a>
                                            </div>
                                            '
                                                data-original-title="Operations"
                                        >
                                            az
                                        </button>
                                        <button class="customBtn applyBtn applyBtn-white applyBtn-squared_lang" aria-label="lang edit"
                                                data-container="body" data-placement="top" data-toggle="popover" data-html="true" title=""
                                                data-content=
                                                '
                                                <div class="buttonGroup buttonGroup--table">
                                                @if(in_array('en',$info->language))
                                                    <a href="{{route('admin.add-course',[$info->item_id,'edit','en'])}}" class="customBtn quickBtn">Düzəliş</a>
                                                @else
                                                    <a href="{{route('admin.add-course',[$info->item_id,'new-translate','en'])}}" class="customBtn quickBtn">Əlavə et</a>
                                                @endif
                                                    <a href="{{route('admin.trash-course-translate',[$info->id,'course'])}}" class="customBtn quickBtn">Remove</a>
                                                </div>
'
                                                data-original-title="Operations"
                                        >
                                            en
                                        </button>
                                    </div>
                                </td>
                                <td>

                                    <a href="{{route('admin.trash-course',[$info->item_id,'course'])}}" class="customBtn applyBtn applyBtn-trash_lang applyBtn-trash" aria-label="silmek buttonu">
                                        <i class="xin-icon xin-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="page_head">
                <div class="quickLinks">
                    <a href="{{route('admin.add-tranings',[0,'new'])}}" class="customBtn quickBtn">
                        Təlim əlavə et
                    </a>
                </div>
            </div>
            <div class="page_content">
                <div class="table-responsive">
                    <table class="table dataTable table-borderless">
                        <thead>
                        <tr>
                            <th>Adı</th>
                            <th>Status</th>
                            <th>Dil</th>
                            <th class="no-sort" style="width: 30px;">Silmək</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($data as $info)

                            <tr>
                                <td>{{$info->name ?? ''}}</td>
                                <td>{{($info->status ?? '') == 1 ? 'Görünən':'Gizli'}}</td>
                                <td>
                                    <div class="buttonGroup buttonGroup--table">
                                        <button class="customBtn applyBtn applyBtn-white applyBtn-squared_lang" aria-label="lang edit"
                                                data-container="body" data-placement="top" data-toggle="popover" data-html="true" title=""
                                                data-content=
                                                '
                                            <div class="buttonGroup buttonGroup--table">
                                                @if(in_array('az',$info->language))
                                                    <a href="{{route('admin.add-tranings',[$info->item_id,'edit','az'])}}" class="customBtn quickBtn">Düzəliş</a>
                                                @else
                                                    <a href="{{route('admin.add-tranings',[$info->item_id,'new-translate','az'])}}" class="customBtn quickBtn">Əlavə et</a>
                                                @endif
                                                    <a href="{{route('admin.trash-course-translate',[$info->item_id,'trainings'])}}" class="customBtn quickBtn">Remove</a>
                                            </div>
                                            '
                                                data-original-title="Operations"
                                        >
                                            az
                                        </button>
                                        <button class="customBtn applyBtn applyBtn-white applyBtn-squared_lang" aria-label="lang edit"
                                                data-container="body" data-placement="top" data-toggle="popover" data-html="true" title=""
                                                data-content=
                                                '
                                                <div class="buttonGroup buttonGroup--table">
                                                @if(in_array('en',$info->language))
                                                    <a href="{{route('admin.add-tranings',[$info->item_id,'edit','en'])}}" class="customBtn quickBtn">Düzəliş</a>
                                                @else
                                                    <a href="{{route('admin.add-tranings',[$info->item_id,'new-translate','en'])}}" class="customBtn quickBtn">Əlavə et</a>
                                                @endif
                                                    <a href="{{route('admin.trash-course-translate',[$info->item_id,'tranings'])}}" class="customBtn quickBtn">Remove</a>
                                                </div>
'
                                                data-original-title="Operations"
                                        >
                                            en
                                        </button>
                                    </div>
                                </td>
                                <td>

                                    <a href="{{route('admin.trash-course',[$info->item_id,'tranings'])}}" class="customBtn applyBtn applyBtn-trash_lang applyBtn-trash" aria-label="silmek buttonu">
                                        <i class="xin-icon xin-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
