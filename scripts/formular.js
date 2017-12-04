jQuery(document).ready(function ($) {
    $("#piwik-link-generator-form").submit(function (event) {

        $piwikUrl = $("#InputAddress").val();

        const inputCampaignName = $("#InputCampaignName");
        if (inputCampaignName.val()) {
            $piwikUrl += '&pk_campaign=' + encodeURIComponent(inputCampaignName.val());
        }

        const inputCampaignKeyword = $("#InputCampaignKeyword");
        if (inputCampaignKeyword.val()) {
            $piwikUrl += '&pk_kwd' + encodeURIComponent(inputCampaignKeyword.val());
        }

        $("#OutputAddress").val($piwikUrl);
        event.preventDefault();
    });
});