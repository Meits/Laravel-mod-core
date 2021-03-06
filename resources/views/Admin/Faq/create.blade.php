<!-- Page header -->
<form class="form-validate-jquery" enctype="multipart/form-data" method="post"
      action="{{ route('faqs.store') }}">
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">{{$title}}</span></h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
            <div class="header-elements d-none">
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success btn-labeled btn-labeled-left btn-lg legitRipple "><b><i
                                    class="icon-pin-alt"></i></b>{{__('admin.pages_form_submit_label')}}</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">

        <!-- Input group addons -->
        <div class="card">

            <div class="card-body">
                @csrf
                <fieldset class="mb-3">
                    <legend class="text-uppercase font-size-sm font-weight-bold">{{__('admin.pages_form_common_info')}}</legend>

                    <ul class="nav nav-tabs nav-justified">
                        @foreach($languages as $key => $language)
                            <li class="nav-item"><a href="#basic-justified-tab{{$key}}"
                                                    class="nav-link @if($key == 0) active @endif"
                                                    data-toggle="tab">{!! $language->name !!}</a></li>
                        @endforeach
                    </ul>


                    <div class="tab-content">
                        @foreach($languages as $key => $language)
                            <div id="basic-justified-tab{{$key}}"
                                 class="tab-pane fade show @if($key == 0) active @endif">
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">{{__('admin.pages_form_title_label')}}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <input type="text" name="localization[{{$language->id}}][title]" required class="form-control"
                                                   value=""
                                                   placeholder="{{__('admin.pages_form_title_label')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header header-elements-inline">
                                    <h5 class="card-title">Text</h5>
                                </div>
                                <div class="mb-3">
                                    <textarea rows="5" cols="5" name="localization[{{$language->id}}][text]" id="text" class="editor" required
                                              placeholder=""></textarea>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </fieldset>
                <button type="submit" class="btn btn-success btn-labeled btn-labeled-left btn-lg legitRipple "><b><i
                                class="icon-pin-alt"></i></b>{{__('admin.pages_form_submit_label')}}</button>


            </div>
        </div>
        <!-- /input group addons -->

    </div>
</form>
<!-- /content area -->
