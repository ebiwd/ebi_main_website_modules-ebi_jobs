<?php
  $keyword = !empty($_GET['keyword']) ? $_GET['keyword'] : "";
  $current_path_alias = drupal_get_path_alias();

  $technology_jobs_link = l(t('Technology jobs'), $current_path_alias, [
    'query' => [
      'categorization' => 'Technology',
    ],
  ]);

  $administrative_support_jobs_link = l(t('Administrative and support jobs'), $current_path_alias, [
    'query' => [
      'categorization' => 'Administrative and support',
    ],
  ]);

  $science_reseach_training_jobs_link = l(t('Science, research and training'), $current_path_alias, [
    'query' => [
      'categorization' => 'Science, research and training',
    ],
  ]);
?>

<div class="form-filter-wrapper">
<form>
  <div class="small-collapse">
    <div class="columns small-11 margin-bottom-none search-text-wrapper">
      <input id="keyword" class="margin-bottom-none" title="EBI Search" tabindex="2" value="<?php print $keyword; ?>" type="text" name="keyword" value="" size="35"
        maxlength="2048" placeholder="Enter Keyword, Job Title or Skills">
      <span class="form-error margin-top-small">
        You need to enter a search query.
      </span>
    </div>
    <div class="columns small-1 margin-bottom-none">
      <input id="search_submit" class="button icon icon-functional small-12" tabindex="3" type="submit"
        value="1" style="line-height:.9; margin-bottom:0;">
    </div>

    <div class="columns small-12">
      <div class="quick-search">
        Or use a quick search : <?php print $technology_jobs_link . $administrative_support_jobs_link . $science_reseach_training_jobs_link; ?>
        </div>
    </div>
  </div>
</form>
</div>