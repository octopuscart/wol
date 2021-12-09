<?php
$this->load->view('layout/header');
$this->load->view('layout/topmenu');
?>
<style>
    .card.disable {
        opacity: 0.2;
    }
</style>
<!-- ================== BEGIN PAGE CSS STYLE ================== -->
<link href="<?php echo base_url(); ?>assets/plugins/jquery-tag-it/css/jquery.tagit.css" rel="stylesheet" />
<script src="<?php echo base_url(); ?>assets/plugins/jquery-tag-it/js/tag-it.min.js"></script>

<link href="<?php echo base_url(); ?>assets/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" />
<div class="page-wrapper" ng-controller="cardController">
    <div class="container-fluid">
        <div id="content" class="content">
            <div id="content" class="content content-full-width">
                <table class="table">
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="m-r-10">
                                    <img src="<?php echo base_url(); ?>assets/collection/front/<?php echo $collectionsobj['image']; ?>" alt="user" class="" width="45">
                                </div>
                                <div class="m-l-10" style="margin-left: 10px;">
                                    <h4 class="m-b-0 font-16"><?php echo $collectionsobj['title']; ?></h4>
                                    <span style="font-size: 10px;"><?php echo $collectionsobj['access_code']; ?></span>
                                </div>

                            </div>
                            <hr/>
                            <a class="btn btn-dark btn-outline " style="" href="<?php echo site_url("Account/addCard/" . $collectionsobj['id']) ?>"><i class="sl-icon-pencil"></i> ADD CARD</a>

                        </td>
                        <td>
                            <a class="btn default btn-outline el-link  " style="float: right;    font-weight: 500;    color: black" href="<?php echo site_url("Account/getCollection") ?>"><i class="sl-icon-arrow-left"></i> GO BACK</a>

                        </td>
                    </tr>
                </table>
                <div class="row el-element-overlay">
                    <?php
                    foreach ($collectionslist as $key => $value) {
                        ?>
                        <div class="col-lg-2 col-md-6">
                            <div class="card ">
                                <div class="el-card-item">
                                    <div class="el-card-avatar el-overlay-1"> 
                                        <img src="<?php echo base_url(); ?>assets/collection/cards/<?php echo $value['image']; ?>" alt="user" style="" />
                                        <ul class="list-style-none el-info">
                                            <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);" ng-click="viewPhotos('<?php echo "cards/" . $value['image']; ?>')"><i class="sl-icon-magnifier"></i></a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
$this->load->view('layout/footer');
?>
<script>

    Admin.controller('cardController', function ($scope, $http, $timeout, $interval) {});
    $(function () {

<?php
$checklogin = $this->session->flashdata('checklogin');
if ($checklogin['show']) {
    ?>
            $.gritter.add({
                title: "<?php echo $checklogin['title']; ?>",
                text: "<?php echo $checklogin['text']; ?>",
                image: '<?php echo base_url(); ?>assets/emoji/<?php echo $checklogin['icon']; ?>',
                            sticky: true,
                            time: '',
                            class_name: 'my-sticky-class '
                        });
    <?php
}
?>
                })
</script>