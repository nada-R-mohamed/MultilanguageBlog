@extends('dashboard.layouts.layout')

@section('body')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <form action="" method="" enctype="multipart/form-data">
                <div class="row">

                    <div class="card">
                        <div class="card-header">
                            <strong>Normal</strong>Form
                        </div>

                        <div class="card-block">
                            {{--  <div class="form-group col-md-6">
                                <label>{{ __('words.logo') }}</label>
                                <img src="" alt="" style="height: 50px">
                            </div>
                            <div class="form-group col-md-6">
                                <label>{{ __('words.favicon') }}</label>
                                <img src="" alt="" style="height: 50px">
                            </div>  --}}
                            <div class="form-group col-md-6">
                                <label>{{ __('words.logo') }}</label>
                                <input type="file" name="logo" class="form-control" placeholder="Enter Email..">
                            </div>
                            <div class="form-group col-md-6">
                                <label>{{ __('words.favicon') }}</label>
                                <input type="file" name="favicon" class="form-control"
                                    placeholder="{{ __('words.favicon') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>{{ __('words.facebook') }}</label>
                                <input type="text" name="facebook" class="form-control"
                                    placeholder="{{ __('words.facebook') }}" value="">
                            </div>
                            <div class="form-group col-md-6">
                                <label>{{ __('words.instagram') }}</label>
                                <input type="text" name="instagram" class="form-control"
                                    placeholder="{{ __('words.instagram') }}" value="">
                            </div>
                            <div class="form-group col-md-6">
                                <label>{{ __('words.phone') }}</label>
                                <input type="text" name="phone" class="form-control"
                                    placeholder="{{ __('words.phone') }}" value="">
                            </div>
                            <div class="form-group col-md-6">
                                <label>{{ __('words.email') }}</label>
                                <input type="text" name="email" class="form-control"
                                    placeholder="{{ __('words.email') }}" value="">
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <strong>{{ __('words.translations') }}</strong>
                            </div>
                            <div class="card-block">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">


                                    <li class="nav-item">
                                        <a class="nav-link active " id="home-tab" data-toggle="tab" href="#"
                                            role="tab" aria-controls="home" aria-selected="true"></a>
                                    </li>

                                </ul>
                                <div class="tab-content" id="myTabContent">

                                    <div class="tab-pane mt-3 fade  show active in " id="" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <br>
                                        <div class="form-group mt-3 col-md-12">
                                            <label>{{ __('words.email') }}</label>
                                            <input type="text" name="" class="form-control"
                                                placeholder="{{ __('words.email') }}" value="">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>{{ __('words.content') }}</label>
                                            <textarea name="" class="form-control" cols="30" rows="10"></textarea>
                                        </div>


                                        <div class="form-group col-md-12">
                                            <label>{{ __('words.address') }}</label>
                                            <input type="text"name="" class="form-control" value="">
                                        </div>
                                    </div>


                                </div>






                                <div class="card-footer">
                                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i>
                                        Submit</button>
                                    <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i>
                                        Reset</button>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
