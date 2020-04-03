<!-- 
    Rendar Dashboar Header
    ---------------------
    The view is loaded as a page fragment, this page alone does not constitude that dashboard.
 -->

 <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title> <?= isset($title) ? $title : 'BS Rendar';?> - Dashboard</title>
    <meta name="description" content="BS Render and Clients Dashboard">
    <link rel="stylesheet" href="<?= base_url();?>/clientAssets/assets/bootstrap/css/bootstrap.min.css?h=2ad2b595dbb7119c5473ff4c94f299d2">
    <link rel="stylesheet" href="<?= base_url();?>/clientAssets/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/clientAssets/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/clientAssets/assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Basic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Belleza">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bree+Serif&amp;subset=latin-ext">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cantata+One&amp;subset=latin-ext">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Copse">
    <link rel="stylesheet" href="<?= base_url();?>/clientAssets/assets/css/bs-dsh-media.css?h=09766d7c0ee3233503df4c9ea00e07af">
    <link rel="stylesheet" href="<?= base_url();?>/clientAssets/assets/css/modal-dailog/ibox.css?h=c9f2927f4495ff0146d0ab474803fb2f">
    <link rel="stylesheet" href="<?= base_url();?>/clientAssets/assets/css/modal-dailog/infobox.css?h=2f8586e0e9d77d99be1d55fe82ad8167">
    <link rel="stylesheet" href="<?= base_url();?>/clientAssets/assets/css/Google-Style-Login.css?h=857edb71cfc135683f2a1788dc6dcd99">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/clientAssets/assets/css/loader.min.css?h=380c56e785f00b4b744f1b48d5aaa1e9">
    <link rel="stylesheet" href="<?= base_url();?>/clientAssets/assets/css/styles.css?h=164f77d159ab5814e0a831cd83a4ef55">
    <link rel="stylesheet" href="<?= base_url();?>/clientAssets/assets/css/Table-With-Search-1.css?h=604cb4e2e523f88e3270d5f1dbcb81fa">
    <link rel="stylesheet" href="<?= base_url();?>/clientAssets/assets/css/Table-With-Search.css?h=151c14cfaa5080353ec48ad9f843c0b4">
    <!-- Site Icon -->
    <link rel="shortcut icon" type="image/png" href="<?= base_url();?>/favicon.ico"/>
    <!-- ./Site Icon -->

    <!-- FineUploader style -->
    <!-- [file upload library --[Finduploader]-- ] -->
    <link rel="stylesheet" href="<?=base_url();?>/globalAssets/finUploader/plugin/fine-uploader/fine-uploader/fine-uploader-new.css">

    <!-- [file uploader --[Finduploader]-- ] -->
    <!-- Fine Uploader Thumbnails template w/ customization
    ====================================================================== -->
    <script type="text/template" id="qq-template-manual-trigger">
        <div class="qq-uploader-selector qq-uploader" qq-drop-area-text="Drop files here">
            <div class="qq-total-progress-bar-container-selector qq-total-progress-bar-container">
                <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar"></div>
            </div>
            <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
                <span class="qq-upload-drop-area-text-selector"></span>
            }
            </div>
            <div class="buttons">
                <div class="qq-upload-button-selector qq-upload-button">
                    <div>Select files</div>
                </div>
                <button type="button" id="trigger-upload" class="btn btn-primary">
                    <i class="icon-upload icon-white"></i> Upload
                </button>
            </div>
            <span class="qq-drop-processing-selector qq-drop-processing">
                <span>Processing dropped files...</span>
                <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
            </span>
            <ul class="qq-upload-list-selector qq-upload-list" aria-live="polite" aria-relevant="additions removals">
                <li>
                    <div class="qq-progress-bar-container-selector">
                        <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-progress-bar-selector qq-progress-bar"></div>
                    </div>
                    <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
                    <img class="qq-thumbnail-selector" qq-max-size="100" qq-server-scale>
                    <span class="qq-upload-file-selector qq-upload-file"></span>
                    <span class="qq-edit-filename-icon-selector qq-edit-filename-icon" aria-label="Edit filename"></span>
                    <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">
                    <span class="qq-upload-size-selector qq-upload-size"></span>
                    <button type="button" class="qq-btn qq-upload-cancel-selector qq-upload-cancel">Cancel</button>
                    <button type="button" class="qq-btn qq-upload-retry-selector qq-upload-retry">Retry</button>
                    <button type="button" class="qq-btn qq-upload-delete-selector qq-upload-delete">Delete</button>
                    <span role="status" class="qq-upload-status-text-selector qq-upload-status-text"></span>
                </li>
            </ul>

            <dialog class="qq-alert-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">Close</button>
                </div>
            </dialog>

            <dialog class="qq-confirm-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">No</button>
                    <button type="button" class="qq-ok-button-selector">Yes</button>
                </div>
            </dialog>

            <dialog class="qq-prompt-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <input type="text">
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">Cancel</button>
                    <button type="button" class="qq-ok-button-selector">Ok</button>
                </div>
            </dialog>
        </div>
    </script>
    <!-- Fine Uploader Thumbnails template w/ customization
    ====================================================================== -->
    <style type="text/css">
        #trigger-upload {
            color: white;
            background-color: #00ABC7;
            font-size: 14px;
            padding: 7px 20px;
            background-image: none;
        }

        #fine-uploader-manual-trigger .qq-upload-button {
            margin-right: 15px;
        }

        #fine-uploader-manual-trigger .buttons {
            width: 36%;
        }

        #fine-uploader-manual-trigger .qq-uploader .qq-total-progress-bar-container {
            width: 60%;
        }

        .active-tab{
            border-top: .1rem solid gold;
        }
    </style>
    <!-- ./FineUploader style -->
</head>

<body>
    <!-- Start: DSH App -->
    <main>