<?php 
// I18N support information here
// $language = "fr_FR";
$language = $content['language'];
putenv("LANG=" . $language); 
setlocale(LC_ALL, $language);
 
// Set the text domain as "messages"
$domain = "messages";
bindtextdomain($domain, "Locale"); 
bind_textdomain_codeset($domain, 'UTF-8');
 
textdomain($domain);
?>
<?php include __DIR__.'/'.'tp_pt_header.php'; ?>

<!-- Main Content Section -->
<div class="container lg-font col-md-12" style="border:0px solid black;">

 <form id="survey_form" class="form-horizontal" style="border:0px dotted black;" action="/map/survey/2du/<?php echo $content['surveyId'] ?>" method="post">

    <div class="col-md-12" role="Intro" id="role-intro">
      <div style="text-align:center;font-size:1.1em;margin-top:20px;">
        <div class="col-md-9 small">&nbsp;</div><div class="col-md-3 pull-right small" style="font-size:14px;">English | <a href="/map/survey/start/fr">Français</a> | <a href="/map/survey/start/es">Español</a></div>
        Thank you for participating in the Open Data Impact Map, a searchable, centralized database of open data use cases from around the world. 
        Your contribution makes it possible to better understand the value of open data and encourage its use globally.
        Information collected will be displayed on the <a href="/map.html">Map</a> and will be made available as open data.
        <br /><br /><div class="warning">FOR INTERNAL USE ONLY</div>
      </div>
      <br />

    </div>
     
    <div class="col-md-12" role="eligibility" id="role-eligibility">Profile source
      <div class="row col-md-12">
        <h4>ELIGIBILITY</h4>
      </div>
      <div>
        <b>The Open Data Impact Map includes organizations that:</b>
          <ul>
              <li>are companies, non-profits, or developer groups; and</li>
              <li>use open government data for advocacy, to develop products and services, improve operations, inform strategy and/or conduct research.</li>
            </ul>
        We define open government data as publicly available data that is produced or commissioned by governments 
        and that can be accessed and reused by anyone, free of charge. 
      </div>
    </div>

<br />

    <div class="col-md-12" role="orgInfo-titlebar"  id="role-orgInfo-titlebar">
      <div class="section-title"><h3>1. Organizational Information</h3></div>
    </div>

    <div class="col-md-12" role="orgInfo"  id="role-orgInfo">
      <!-- Name of organization -->
      <div class="row col-md-12">
        <div class="form-group col-md-12">
          <div class="form-group col-md-10">
            <label for="org_name">Name of organization<small class="required">*</small></label>
            <input type="text" class="form-control" id="org_name" name="org_name" placeholder="" required minlength="2">
        </div>
        </div>
      </div>

      <!-- Description of organization -->
      <div class="form-group col-md-12">
        <div class="form-group col-md-10">
          <label for="org_description">One sentence description of organization </label>
          <textarea type="text" class="form-control " id="org_description" name="org_description"></textarea>
        </div>
      </div>

      <!-- Type of organization -->
      <div class="form-group col-md-12" id="org_type">
          <label for="org_type">Type of organization<small class="required">*</small></label>
          <label id="org_type-error" class="error" for="org_type"></label>
        <div class="col-md-10">
          <div class="btn-group" data-toggle="buttons" id="divSaleType">
            <label class="btn btn-default">
                <input type="radio" name="org_type" id="For_profit" value="For-profit"> For-profit
            </label>
            <label class="btn btn-default">
                <input type="radio" name="org_type" id="Nonprofit" value="Nonprofit"> Nonprofit
            </label>
            <label class="btn btn-default">
                <input type="radio" name="org_type" id="Developer_group" value="Developer group"> Developer group
            </label>
            <label class="btn btn-default">
                <input type="radio" name="org_type" id="Other" value="Other"> Other
            </label>
          </div>
        </div>
      </div>

      <!-- Website URL -->
      <div class="form-group col-md-12">
        <label for="org_url">Website URL</label>
        <div class="row">      
            <div class="col-md-8">
              <input type="input" class="form-control" id="org_url" name="org_url" placeholder="http://" value="http://">
            </div>
            <div class="col-md-4">
              <input type="checkbox" name="no_org_url" id="no_org_url" value="True"> No URL
            </div>
        </div>
      </div>

      <!-- Location -->  
      <div class="form-group col-md-12">
        <div class="form-group col-md-10 details">

          <label for="org_hq_city_all">Location </label>
          <input type="text" class="form-control" id="org_hq_city_all" name="org_hq_city_all">

          <!--label for="org_hq_city">City</label -->
          <input type="hidden" class="form-control" id="org_hq_city" name="org_hq_city" data-geo="locality">

          <!--label for="org_hq_st_prov">State/Province</label -->
          <input type="hidden" class="form-control" id="org_hq_st_prov" name="org_hq_st_prov" data-geo="administrative_area_level_1">

          <!--label for="org_hq_country">Country</label -->
          <input type="hidden" class="form-control" id="org_hq_country" name="org_hq_country" data-geo="country">

          <!--label for="latitude">lat</label -->
          <input type="hidden" class="form-control" id="latitude" name="latitude" data-geo="lat">
          <!--label for="longitude">lng</label -->
          <input type="hidden" class="form-control" id="longitude" name="longitude" data-geo="lng">

          <!-- Added by Myeong since lcode was missing from administered survey -->
          <input type="hidden" class="form-control" id="org_hq_country_locode" name="org_hq_country_locode" data-geo="country_short">
        </div>
      </div>
  
      <!-- Industry/category of organization -->
      <div class="form-group col-md-12">
        <label for="industry_id">Industry/category of the organization <small class="required">(select 1)*</small></label>
        <label id="industry_id-error" class="error" for="industry_id"></label>
        <fieldset>
        <div class="col-md-4" id="industry_id_col-1">
          <input type="radio" name="industry_id" class="industry_id" value="Agriculture" required>&nbsp; Agriculture
          <br /><input type="radio" name="industry_id" class="industry_id" value="Arts, culture and tourism">&nbsp; Arts, culture and tourism
          <br /><input id="industry_id_cul" type="radio" name="industry_id" class="industry_id" value="Business, research and consulting" required>&nbsp; Business, research and consulting
          <br /><input type="radio" name="industry_id" class="industry_id" value="Consumer">&nbsp; Consumer
          <br /><input type="radio" name="industry_id" class="industry_id" value="IT and geospatial">&nbsp; IT and geospatial
          <br /><input type="radio" name="industry_id" class="industry_id" value="Education">&nbsp; Education
          <br /><input type="radio" name="industry_id" class="industry_id" value="Energy and climate">&nbsp; Energy and climate
        </div>
        <div class="col-md-4" id="industry_id_col-2">
        <input type="radio" name="industry_id" class="industry_id" value="Finance, investment and insurance">&nbsp; Finance, investment and insurance
          <br /><input type="radio" name="industry_id" class="industry_id" value="Governance">&nbsp; Governance
          <br /><input type="radio" name="industry_id" class="industry_id" value="Health">&nbsp; Health
          <br /><input type="radio" name="industry_id" class="industry_id" value="Housing, construction and real estate">&nbsp; Housing, construction and real estate
          <br /><input type="radio" name="industry_id" class="industry_id" value="Media and communications">&nbsp; Media and communications
          <br /><input type="radio" name="industry_id" class="industry_id" value="Transportation and logistics">&nbsp; Transportation and logistics
          <br /><input type="radio" name="industry_id" class="industry_id" id="industr_id_other" value="Other">&nbsp; Other
                <input type="text" class="form-control" style="display:none" id="industry_other" name="industry_other" placeholder="Describe other">
        </div>
        </fieldset>
      </div>
      

      <!-- Founding year -->    
      <div class="form-group col-md-12">
        <div class="form-group col-md-10">
          <label for="org_year_founded">Founding year<small class="required">*</small></label>
          <input type="text" class="form-control" id="org_year_founded" name="org_year_founded" placeholder="">
        </div>
      </div>

      <!-- Size -->
      <div class="form-group col-md-12">
        <label for="org_size_id">Size<small class="required">*</small></label>
        <label id="org_size_id-error" class="error" for="org_size_id"></label>
        <div class="col-md-12">
          <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-default">
                <input type="radio" name="org_size_id" value="1-10"> 1-10 employees
            </label>
            <label class="btn btn-default">
                <input type="radio" name="org_size_id" value="11-50"> 11-50 employees
            </label>
            <label class="btn btn-default">
                <input type="radio" name="org_size_id" value="51-200"> 51-200 employees
            </label>
            <label class="btn btn-default">
                <input type="radio" name="org_size_id" value="201-1000"> 201-1000 employees
            </label>
            <label class="btn btn-default">
                <input type="radio" name="org_size_id" value="1000+"> 1000+ employees
            </label>
          </div>
        </div>
      </div>

      <!-- What is the greatest type of impact your organization has? -->
      <div class="form-group col-md-12" id="org_greatest_impact">
        <label for="org_greatest_impact">What is the greatest type of impact your organization has?</label>
        <label id="org_greatest_impact-error" class="error" for="org_greatest_impact"></label>
        <div class="col-xs-9">
          <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-default">
                <input type="radio" name="org_greatest_impact" id="Economic" value="Economic" /> Economic
            </label>
            <label class="btn btn-default">
                <input type="radio" name="org_greatest_impact" id="Environmental" value="Environmental" /> Environmental
            </label>
            <label class="btn btn-default">
                <input type="radio" name="org_greatest_impact" id="Governance" value="Governance" /> Governance
            </label>
            <label class="btn btn-default">
                <input type="radio" name="org_greatest_impact" id="Social" value="Social" /> Social
            </label>
            <label class="btn btn-default">
                <input type="radio" name="org_greatest_impact" id="Other" value="Other" /> Other
            </label>
          </div>
        </div>
        <div class="col-md-10" id="org_greatest_impact_detail_div"><input type="text" class="form-control" id="org_greatest_impact_detail" name="org_greatest_impact_detail" placeholder="<?php echo _("PROVIDE_DETAILS") ?>"></div>
      </div>
    </div><!--/OrgInfo-->

<br />

    <div class="col-md-12" role="dataUse-titlebar"  id="role-dataUse-titlebar">
      <div class="section-title"><h3>2. Use of Open Data</h3></div>
    </div>

    <div class="col-md-12" role="dataUse" id="role-dataUse">
      
      <div class="row col-md-12 data-use-row" id="dataUseDataType">
        <label for="data_use_type[]">What are the <u>most relevant</u> types of data your organization uses? <small class="required">(select all that apply)*</small></label>
        <label id="data_use_type[]-error" class="error" for="data_use_type[]"></label>
        <div class="col-md-4" id="data_type_col-1">
            <input type="checkbox" name="data_use_type[]" class="data_use_type" value="Agriculture">&nbsp; <span>Agriculture</span>
            <br /><input type="checkbox" name="data_use_type[]" class="data_use_type" value="Arts and culture">&nbsp; <span>Arts and culture</span>
            <br /><input type="checkbox" name="data_use_type[]" class="data_use_type" value="Business">&nbsp; <span>Business</span>
            <br /><input type="checkbox" name="data_use_type[]" class="data_use_type" value="Consumer">&nbsp; <span>Consumer</span>
            <br /><input type="checkbox" name="data_use_type[]" class="data_use_type" value="Demographics and social">&nbsp; <span>Demographics and social</span>
            <br /><input type="checkbox" name="data_use_type[]" class="data_use_type" value="Economics ">&nbsp; <span>Economics</span>
            <br /><input type="checkbox" name="data_use_type[]" class="data_use_type" value="Education">&nbsp; <span>Education</span>
            <br /><input type="checkbox" name="data_use_type[]" class="data_use_type" value="Energy">&nbsp; <span>Energy</span>
        </div>
        <div class="col-md-4" id="data_type_col-2">
            <input type="checkbox" name="data_use_type[]" class="data_use_type" value="Environment">&nbsp; <span>Environment</span>
            <br /><input type="checkbox" name="data_use_type[]" class="data_use_type" value="Finance">&nbsp; <span>Finance</span>
            <br /><input type="checkbox" name="data_use_type[]" class="data_use_type" value="Geospatial/mapping">&nbsp; <span>Geospatial/mapping</span>
            <br /><input type="checkbox" name="data_use_type[]" class="data_use_type" value="Government operations">&nbsp; <span>Government operations</span>
            <br /><input type="checkbox" name="data_use_type[]" class="data_use_type" value="Health/healthcare">&nbsp; <span>Health/healthcare</span>
            <br /><input type="checkbox" name="data_use_type[]" class="data_use_type" value="Housing">&nbsp; <span>Housing</span>
            <br /><input type="checkbox" name="data_use_type[]" class="data_use_type" value="International/global development">&nbsp; <span>International/global development</span>
            <br /><input type="checkbox" name="data_use_type[]" class="data_use_type" value="Legal">&nbsp; <span>Legal</span>
        </div>
        <div class="col-md-4" id="data_type_col-3">
            <input type="checkbox" name="data_use_type[]" class="data_use_type" value="Manufacturing">&nbsp; <span>Manufacturing</span>
            <br /><input type="checkbox" name="data_use_type[]" class="data_use_type" value="Science and research">&nbsp; <span>Science and research</span>
            <br /><input type="checkbox" name="data_use_type[]" class="data_use_type" value="Public safety">&nbsp; <span>Public safety</span>
            <br /><input type="checkbox" name="data_use_type[]" class="data_use_type" value="Tourism">&nbsp; <span>Tourism</span>
            <br /><input type="checkbox" name="data_use_type[]" class="data_use_type" value="Transportation">&nbsp; <span>Transportation</span>
            <br /><input type="checkbox" name="data_use_type[]" class="data_use_type" value="Weather">&nbsp; <span>Weather</span>
            <br /><input type="checkbox" name="data_use_type[]" class="data_use_type" id="data_use_type_checkbox_other" value="Other">&nbsp; <span>Other</span>
                  <input type="text" class="form-control" style="display:none" id="data_use_type_other" name="data_use_type_other" placeholder="Provide details">
        </div>
      </div>
<br />
      <!-- Sources of open data -->
      <div class="form-group col-md-12">
        <label for="data_country_count">How many countries does your organization use open data from? <small class="required">*</small></label>
        <label id="data_country_count-error" class="error" for="data_country_count"></label>
        <div class="col-md-12">
          <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-default">
                <input type="radio" name="data_country_count" value="1" /> 1 country
            </label>
            <label class="btn btn-default">
                <input type="radio" name="data_country_count" value="2 - 5" /> 2-5 countries
            </label>
            <label class="btn btn-default">
                <input type="radio" name="data_country_count" value="6 - 10" /> 6-10 countries
            </label>
            <label class="btn btn-default">
                <input type="radio" name="data_country_count" value="11 - 20" /> 11-20 countries
            </label>
            <label class="btn btn-default">
                <input type="radio" name="data_country_count" value="21 - 50" /> 21-50 countries
            </label>
            <label class="btn btn-default">
                <input type="radio" name="data_country_count" value="50+" /> 50+ countries
            </label>
          </div>
        </div>
      </div>

      <div id="data_use_details"></div>

      <div class="row col-md-12">
        <label class="row col-md-10">
          How does your organization use open data? 
        </label>

        <div class="form-group col-md-12">
          <div class="col-md-6" id="use_open_data_col-1">
             <div>
              <input type="checkbox" class="use_open_data" name="use_advocacy" id="use_advocacy" value="True"> advocacy
              <textarea class="form-control" style="display:none" id="use_advocacy_desc" name="use_advocacy_desc" placeholder="Provide details"></textarea>
            </div>
            <div>
              <input type="checkbox" class="use_open_data" name="use_prod_srvc" id="use_prod_srvc" value="True"> new products, services, or applications
              <textarea class="form-control" style="display:none" id="use_prod_srvc_desc" name="use_prod_srvc_desc" placeholder="Provide details"></textarea>
            </div>
            <div>
              <input type="checkbox" class="use_open_data" name="use_org_opt" id="use_org_opt" value="True"> organizational optimization <i>(e.g. benchmarking, market analysis, improving efficiency, enhancing existing products and services)</i>
              <textarea class="form-control" style="display:none" id="use_org_opt_desc" name="use_org_opt_desc" placeholder="Provide details"></textarea>
            </div>
          </div>

          <div class="col-md-6" id="use_open_data_col-2">
            <div>
              <input type="checkbox" class="use_open_data" name="use_research" id="use_research" value="True"> research
              <textarea class="form-control" style="display:none" id="use_research_desc" name="use_research_desc" placeholder="Provide details"></textarea>
            </div>
            <div>
              <input type="checkbox" class="use_open_data" name="use_other" id="use_other" value="True"> other
              <textarea class="form-control" style="display:none" id="use_other_desc" name="use_other_desc" placeholder="Provide details"></textarea>
            </div>
          </div>
        </div>
      </div>

      <!-- Machine read -->
      <div class="form-group col-md-12" id="m_read">
          <label for="m_read">Uses machine-readable data? <small class="required">*</small></label>
          <label id="m_read-error" class="error" for="m_read"></label>
        <div class="col-md-10">
          <div class="btn-group" data-toggle="buttons" id="machine_read">
            <label class="btn btn-default">
                <input type="radio" name="m_read" id="Yes" value="Yes"> Yes
            </label>
            <label class="btn btn-default">
                <input type="radio" name="m_read" id="No" value="No"> No
            </label>
            <label class="btn btn-default">
                <input type="radio" name="m_read" id="NA" value="NA"> NA
            </label>
          </div>
        </div>
      </div>


      <!-- Additional description --> 
      <div class="row col-md-12">
        <label class="row col-md-10">
          Additional information <small class="optional">(optional, 400 characters or less)</small>
        </label>

        <div class="row col-md-10">
          <textarea type="text" class="form-control" id="org_additional" name="org_additional" placeholder="E.g. How could the open data your organization uses be improved? Which datasets are most valuable to your organization? What other types of data does your organization use in addition to open government data?"></textarea>
        </div>
      </div>
      <br />
    </div>

    <br />
 
    <div class="col-md-12" role="contact-titlebar"  id="role-contact-titlebar">
      <div class="section-title"><h3>3. Contact Information <small>(This information will not be made public)</small></h3></div>
    </div>

    <div class="col-md-12" role="contact" id="role-contact">

      <div class="form-group col-md-12">
        <div class="col-md-5">
          <div for="survey_contact_first">First name</div>
          <input type="text" class="form-control" id="survey_contact_first" name="survey_contact_first">
        </div>

        <div class="col-md-5">
          <div for="survey_contact_last">Last name</div>
          <input type="text" class="form-control" id="survey_contact_last" name="survey_contact_last">
        </div>

        <div class="col-md-10">
          <div for="survey_contact_title">Title <i>(optional)</i></div>
          <input type="text" class="form-control" id="survey_contact_title" name="survey_contact_title">

          <div for="survey_contact_email">Email</div>
          <input type="email" class="form-control" id="survey_contact_email" name="survey_contact_email">

          <div for="survey_contact_email">Phone <i>(optional)</i></div>
          <input type="text" class="form-control" id="survey_contact_phone" name="survey_contact_phone">

          <input type="hidden" class="form-control" id="org_profile_year" name="org_profile_year" value="2015">
          <div for="org_profile_status">Profile status</div>
          <input type="input" class="form-control" id="org_profile_status" name="org_profile_status" value="Hold">
          <div for="org_profile_src">Profile source</div>
          <input type="input" class="form-control" id="org_profile_src" name="org_profile_src" value="">
          <input type="hidden" class="form-control" id="org_profile_src" name="org_profile_category" value="research">
        </div>
      </div>
    </div><!-- /closes role contact -->
      
      <br />

    <div class="col-md-12" role="submit-note" id="role-submit-note">
      <div style="text-align:center;font-size:16px;margin-top:20px;">
        <b><i>All submissions will be reviewed before public display on the Open Data Impact Map.</i></b>
      </div>
      <br />
    </div>

    <div class="col-md-12" style="text-align:center;">    
      <button class="btn btn-primary" style="padding:1em 2em 1em 2em; width:200px; background-color: rgb(53, 162, 227);" id="btnSubmit" type="submit" name="submit" value="submit">SUBMIT</button>
    </div>

    <div class="w-section attribution" style="margin-top:12px;">
      <div class="w-container">
        <div class="">
          <hr>
          <div class="w-row row-attribution" >
            <div class="w-col w-col-3"><a href="http://od4d.net"><img class="logo-od4" src="/map/survey/img/od4-logo-black.png" width="200"></a>
            </div>
            <div class="w-col w-col-3" style="text-align:center;"><a class="link-attribution" href="http://creativecommons.org/licenses/by-sa/4.0/"><img class="logo-cc" src="/map/survey/img/creative_commons_logo.png" width="150"></a>
            </div>
            <div class="w-col w-col-6">
              <div class="text-attribution">The Open Data Impact Map, a project of the Center for Open Data Enterprise as part of the OD4D network, is licensed under&nbsp;<a class="link-attribution" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-Share Alike 4.0 International License</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</form>

</div> 
<!-- I think I am missing a closing </div> gut things are working. -->
<!-- end container - where is the tag? -->

<?php include __DIR__.'/'.'tp_pt_footer_less_req.php'; ?>

