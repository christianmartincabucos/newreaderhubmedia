<template>
    <main v-cloak>
        <div class="container-fluid container-padding row">
            <div class="col-sm-7">
                <div class="card-wrapper">
                    <div class="card card-gray">
                        <div class="card-header card-darkgray h6 p-2">
                            What inspires you today?
                        </div>
                        <div class="card-body card-gray card-radius" style="height:50px;">
                            <a class="text-white mr-1" role="button"><i class="far fa-plus-square"></i></a>
                            <a class="text-white" data-toggle="modal" data-target="#modalSubscriptionForm"><i class="fas fa-ellipsis-v"></i></a>
                        </div>
                    </div>
                    <div class="card-gray card mt-3">
                        <div class="card-body card-gray card-radius mx-3 py-2">
                            <div class="d-flex justify-content-center">
                                <div class="picture-box">
                                    <img class="mx-2 my-2 rounded-circle" alt="100x100" height="25" width="25" src="../assets/img/profile-pic.jpg" data-holder-rendered="true">
                                </div>
                                <div class="picture-box">
                                    <img class="mx-2 my-2 rounded-circle" alt="100x100" height="25" width="25" src="../assets/img/profile-pic.jpg" data-holder-rendered="true">
                                </div>
                                <div class="picture-box">
                                    <img class="mx-2 my-2 rounded-circle" alt="100x100" height="25" width="25" src="../assets/img/profile-pic.jpg" data-holder-rendered="true">
                                </div>
                                <div class="picture-box">
                                    <img class="mx-2 my-2 rounded-circle" alt="100x100" height="25" width="25" src="../assets/img/profile-pic.jpg" data-holder-rendered="true">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card my-3">

                        <div class="float-right mr-2" style="position: absolute; top: 2%; right: 0%;">
                            <a role="button" class="text-white"><i class="fas fa-ellipsis-v"></i></a>
                        </div>
                        <div class="card-header rounded-top card-gray d-flex flex-row">

                            <img src="../assets/img/profile-pic.jpg" class="rounded-circle mr-3" height="45px" width="45px" alt="avatar">
                            <div>

                                <h5 class="card-title mb-1">John Doe</h5>
                                <h6 class="card-text" style="font-size:0.7rem;"><i class="far fa-clock pr-2"></i>15 hours ago</h6>

                            </div>

                        </div>

                        <div class="card-body p-0">
                            <div class="view overlay">
                                <img class="card-img-top" src="../assets/img/blog.png" alt="Card image cap">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                        </div>
                        <div class="card-footer card-gray px-2 rounded py-2">
                            <div class="d-flex justify-content-between">
                                <div class="text-center offset-md-2">
                                    <h5>10 Ways Artists can improve their art</h5>
                                    <h6>Things you should know to better yourself</h6>
                                </div>
                                <div class="float-right">
                                    <a role="button" class="text-white"><i class="fas fa-ellipsis-h"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 p-0">
                    <Birthday></Birthday>
                <div class="row">
                    <div class="col-5 mt-3 pr-0 mb-5">
                        <Advertisement></Advertisement>
                    </div>

                    <div class="col-7 mt-3 pl-2">
                        <Links></Links>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content dimgrey rounded">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Create Post</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body pt-2 px-2 mx-2">
                        <div class="d-flex justify-content-start mb-2">
                        
                            <img src="../assets/img/profile-pic.jpg" class="rounded-circle mr-3" height="40px" width="40px" alt="avatar">
                                <div>

                                    <h5 class="font-weight-bold card-title py-2">John Doe</h5>

                                </div>
                        </div>


                        <div class="form-group row my-0">
                            <div class="col-md-12 mb-0 py-1">
                                <ValidationProvider name="body" rules="required" :bails="false" v-slot="{classes,errors}">
                                    <textarea id="in-post" rows="7" type="text" class="form-control" name="in-body" required autocomplete="in-body" placeholder="What inspires you today?" autofocus>
                                    </textarea>
                                    <span class="error">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </div>
                        </div>
                        
                        <div class="form-group row my-2">
                            <div class="col-md-12 mb-0 py-1">
                                <fieldset>
                                    <div class="d-flex justify-content-end mx-3 py-2">
                                        <a class="h5 mx-1"><i class="fas fa-photo-video" style="color:#07630b;"></i></a>
                                        <a class="h5 mx-1"><i class="fas fa-map-marker-alt" style="color:#ff3547;"></i></a>
                                        <a class="h5 mx-1"><i class="fas fa-user-tag" style="color:#007bff;"></i></a>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                            
                        <div class="form-group row my-2">
                            <div class="col-md-12">
                                <button class="btn btn-gray br-half btn-block btn-md">Post<i class="fas fa-paper-plane-o ml-1"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>
<style scoped>
    .form-control {
        background-color: #e1e1e1 !important;
    }
    fieldset {
        border: 2px solid #eeeeee;
        border-radius: 5px;
    }
    legend {
        background-color: gray;
        color: white;
    }
    .modal-header {
        padding: 0.5rem 0.5rem;
        border-bottom: 0.5px solid #f8f9fa;
    }
    .btn-gray {
        background-color: #A1A1A1 !important;
    }
    .card{
        background-color: #B7B7B7 !important;
        
    }
    .card-lightgray {
        background-color: #CCCCCC !important;
    }

    .mt-72 {
        margin-top: 72px !important;
    }

    .box {
        width: 250px;
        height: 62px;
        margin-right: 2px;
        background-color: #fff;
    }

    .link-box {
        width: 300px;
        height: 93px;
        margin-right: 2px;
        background-color: #fff;
    }

    .picture-box {
        width: 110px;
        height: 170px;
        margin-right: 8px;
        margin-left: 8px;
        background-color: #fff;
        border-radius: 0.50rem;
    }

    .card-lightgray {
        border: 0px !important;
        box-shadow: none !important;
    }

    .br-0 {
        border-radius: 0px !important;
    }

    .h6-bday {
        font-size: 0.5rem !important;
        line-height: 0.5 !important;
    }
</style>
<script>
import Birthday from '../views/_Birthday'
import Advertisement from '../views/_Advertisement'
import Links from '../views/_Links'
export default {
    name:'feed',
    components:{
        Birthday,
        Advertisement,
        Links
    }
}
</script>