@extends('admin.master')
@section('content')
    <!-- MAIN PAGE -->
    <section class="mainPage">
        <div class="container-lg">
            <div class="page_head">
                <div class="page_head--header page_head--header_after">
                    Əlaqə
                </div>
            </div>
            <form id="aboutUs" class="section_articleInner_body_content--description" enctype="multipart/form-data" method="post" action="{{route('admin.save.contact')}}">
                {{csrf_field()}}
                <div class="page_content">
                    <form class="section_articleInner_body_content--description">
                        <div class="form-group required">
                            <label class="customLabel" for="language">Səhifə</label>
                            <select class="customSelect" name="page" id="page" required="" title="Səhifə">
                                <option value="0" {{(($contactData->page ?? '') == 0) ? 'selected' : ''}}>Main office</option>
                                <option value="1" {{(($contactData->page ?? '') == 1) ? 'selected' : ''}}>Training Center</option>
                            </select>
                        </div>
                        <div class="form-group required">
                            <label class="customLabel" for="email">E-poçt</label>
                            <input class="formControl" name="email" value="{{$contactData->email ?? ''}}" id="title" type="email" placeholder="example@example.com" required="">
                        </div>
                        <div class="form-group required">
                            <label class="customLabel" for="phone">Əlaqə nömrəsi</label>
                            <input class="formControl" name="phone" type="number" value="{{$contactData->phone ?? ''}}" placeholder="+994 00 000 00 00" required="">
                        </div>
                        <div class="form-group required">
                            <label class="customLabel" for="address">Ünvan</label>
                            <input class="formControl" name="address" value="{{$contactData->address ?? ''}}" type="text" placeholder="Ünvan" required="">
                        </div>
                        <div class="form-group required">
                            <label class="customLabel" for="workingHours">İş saatları</label>
                            <input class="formControl" name="workingHours" value="{{$contactData->workingHours ?? ''}}" type="text" placeholder="İş saatları" required="">
                        </div>
                        <div class="form-group">
                            <label class="customLabel" for="Linkedn">linkedn</label>
                            <input class="formControl" name="social-linkedn" value="{{json_decode($contactData->social ?? '')->linkedn ?? ''}}" type="text" placeholder="Linkedn">
                        </div>
                        <div class="form-group">
                            <label class="customLabel" for="twitter">Facebook</label>
                            <input class="formControl" name="social-facebook" value="{{json_decode($contactData->social ?? '')->facebook ?? ''}}" type="text" placeholder="Facebook">
                        </div>
                        <div class="form-group">
                            <label class="customLabel" for="twitter">Instagram</label>
                            <input class="formControl" name="social-instagram" value="{{json_decode($contactData->social ?? '')->instagram ?? ''}}" type="text" placeholder="Instagram">
                        </div>
                        <div class="form-group">
                            <label class="customLabel" for="twitter">Youtube</label>
                            <input class="formControl" name="social-youtube" value="{{json_decode($contactData->social ?? '')->youtube ?? ''}}" type="text" placeholder="Facebook">
                        </div>
                        <div class="form-group">
                            <label class="customLabel" for="twitter">Telegram</label>
                            <input class="formControl" name="social-telegram" value="{{json_decode($contactData->social ?? '')->telegram ?? ''}}" type="text" placeholder="Telegram">
                        </div>

                        <div class="form-group pt-5">
                            <hr class="mt-5"/>
                            <div class="quickLinks">
                                <button type="submit" class="customBtn quickBtn save-btn">
                                    Əlavə et
                                </button>
                                <a href="{{route('admin.admin-panel')}}" class="customBtn applyBtn-trash">
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

