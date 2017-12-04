<div>
    <h3><?php echo PLG_PLUGIN_TITLE; ?></h3>
    <form method="post" id="piwik-link-generator-form">
        <div class="form-group row">
            <label class="col-2 col-form-label" for="InputAddress">Address</label>
            <input class="col-10 form-control" id="InputAddress" name="InputAddress" placeholder="Campaign Name"
                   type="text"
                   value="<?php echo get_site_url(); ?>?p=<?php echo get_the_ID(); ?>" readonly/>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label" for="InputCampaignName">Campaign Name</label>
            <input class="col-10 form-control" id="InputCampaignName" name="InputCampaignName"
                   placeholder="Campaign Name" type="text"/>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label" for="InputCampaignKeyword">Campaign Keyword</label>
            <input class="col-10 form-control" id="InputCampaignKeyword" name="InputCampaignKeyword"
                   placeholder="Campaign Keyword" type="text" value="<?php echo get_the_title(); ?>"/>
        </div>
        <div class="form-group row">
            <button type="submit">Generate URL</button>
            <button type="reset">Reset fields</button>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label" for="OutputAddress">For using</label>
            <input class="col-10 form-control" id="OutputAddress" name="OutputAddress"
                   placeholder="Here will the address for using appear" type="text" readonly/>
        </div>
    </form>
</div>