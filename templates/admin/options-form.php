<form method="post" action="options.php">
    <!-- Display necessary hidden fields for settings -->
    <?php settings_fields("blankPlugin_settings");?>
    <!-- Display the settings sections for the page --> 
    <?php do_settings_sections("blankPlugin");?>
    <!-- Default Sumbit Button --> 
    <?php submit_button();?>
</form>