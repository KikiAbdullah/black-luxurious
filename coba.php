<div class="popup popup-ucapan">
    <div class="popup-content">
        <div id="div-load">
            <img id="load-ucapan" src="https://upload.wikimedia.org/wikipedia/commons/2/29/Loader.gif" style="display:none;" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="https://raw.githubusercontent.com/KikiAbdullah/repo-asset-stevie-fahmi/main/icons/Ucapan_icon_gold.png" class="logo-ucapan" />

                    <p class="text-ucapan">Ucapan dan Do'a</p>
                </div>
                <div class="col-md-12">
                    <div id="pages_maincontent" class="pages_maincontent--conversation">
                        <div class="page_single layout_fullwidth_padding">
                            <ul class="conversation">
                                <li class="conversation__row conversation__row--received conversation__row--undread">
                                    <div class="conversation__content">
                                        <p>
                                            Hi there, just wanted to let you know about our vacation
                                        </p>
                                        <span class="conversation__time">10:21 am</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="contactform">
                        <form id="form_rsvp" method="post" action="">
                            <div class="form_row">
                                <label>Nama :</label>
                                <input type="text" name="nama" value="" class="form_input" required />
                            </div>

                            <div class="form_row">
                                <label>Kehadiran :</label>
                                <div class="form_row_right">
                                    <label class="label-radio item-content">
                                        <!-- Checked by default -->
                                        <input type="radio" name="kehadiran" value="1" checked="checked" required />
                                        <div class="item-inner">
                                            <div class="item-title">Hadir</div>
                                        </div>
                                    </label>

                                    <label class="label-radio item-content">
                                        <!-- Checked by default -->
                                        <input type="radio" name="kehadiran" value="0" required />
                                        <div class="item-inner">
                                            <div class="item-title">Tidak Hadir</div>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <div class="form_row">
                                <label>Ucapan :</label>
                                <textarea name="ucapan" class="form_textarea" rows="" cols="" placeholder="Ucapan" required></textarea>
                            </div>

                            <input type="submit" name="submit" class="form_submit" id="submit" value="SEND" />
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <a href="#" class="close-popup close-popup--x" data-popup=".popup-ucapan"></a>
    </div>

    <img src="https://raw.githubusercontent.com/KikiAbdullah/repo-asset-stevie-fahmi/main/ornament/Left Top Corner Ornament (SVG).svg" class="ornament-top-left" alt="" />
    <img src="https://raw.githubusercontent.com/KikiAbdullah/repo-asset-stevie-fahmi/main/ornament/Right Top Corner Ornament (SVG).svg" class="ornament-top-right" alt="" />
    <img src="https://raw.githubusercontent.com/KikiAbdullah/repo-asset-stevie-fahmi/main/ornament/Left Bottom Corner Ornament (SVG).svg" class="ornament-bottom-left" alt="" />
    <img src="https://raw.githubusercontent.com/KikiAbdullah/repo-asset-stevie-fahmi/main/ornament/Right Bottom Corner Ornament (SVG).svg" class="ornament-bottom-right" alt="" />
</div>



<script type="text/javascript">
    $("#form_rsvp").submit(function(ev) {
        ev.preventDefault();
        var divIdHtml = $("#load-ucapan").html();
        $.ajax({
            type: "POST",
            url: "https://www.towerinvitee.com/server/rsvp/store/1",
            data: new FormData(this),
            dataType: "JSON",
            processData: false,
            contentType: false,
            async: false,
            cache: false,
            beforeSend: function() {
                $("#loading-image").show();
            },
            success: function(msg) {
                $("#" + div_id).html(divIdHtml + msg);
                $("#loading-image").hide();

                window.location.href = '';
            },
        });
    });
</script>