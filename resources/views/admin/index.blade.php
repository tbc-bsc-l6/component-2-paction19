@extends('admin.admin_master')
@section('admin')

    <div class="content-wrapper">
        <div class="container-full">

        <!-- Main content -->
        <section class="content">
            <div class="col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title align-items-end text-success">
                          WELCOME TO Admin DASHBOARD
                            
                        </h4>
                    </div>

                </div>  
            </div>
            <div class="row">
                
                    <div class="col-xl-3 col-6">
                        <div class="box overflow-hidden pull-up">
                            <div class="box-body">							
                                <div class="icon bg-primary-light rounded w-60 h-60">
                                    <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                                </div>
                                <div>
                                    <p class="text-mute mt-20 mb-0 font-size-16">New Students</p>
                                    <h3 class="text-white mb-0 font-weight-500">100 <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6">
                        <div class="box overflow-hidden pull-up">
                            <div class="box-body">							
                                <div class="icon bg-warning-light rounded w-60 h-60">
                                    <i class="text-warning mr-0 font-size-24 mdi mdi-message"></i>
                                </div>
                                <div>
                                    <p class="text-mute mt-20 mb-0 font-size-16"> Messages</p>
                                    <h3 class="text-white mb-0 font-weight-500">400 <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6">
                        <div class="box overflow-hidden pull-up">
                            <div class="box-body">							
                                <div class="icon bg-info-light rounded w-60 h-60">
                                    <i class="text-info mr-0 font-size-24 mdi mdi-book-minus"></i>
                                </div>
                                <div>
                                    <p class="text-mute mt-20 mb-0 font-size-16"> Added courses</p>
                                    <h3 class="text-white mb-0 font-weight-500">3 new <small class="text-success"><i class="fa fa-caret-up"></i> +0.5%</small></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6">
                        <div class="box overflow-hidden pull-up">
                            <div class="box-body">							
                                <div class="icon bg-danger-light rounded w-60 h-60">
                                    <i class="text-danger mr-0 font-size-24 mdi mdi-phone-incoming"></i>
                                </div>
                                <div>
                                    <p class="text-mute mt-20 mb-0 font-size-16">Inquiry Call</p>
                                    <h3 class="text-white mb-0 font-weight-500">800 <small class="text-success"><i class="fa fa-caret-up"></i> 
                                        +4.5%</small></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                

            </div>
        </section>
        <!-- /.content -->
        </div>
    </div>

@endsection