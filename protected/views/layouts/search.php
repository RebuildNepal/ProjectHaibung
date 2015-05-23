<form id="search" class="search" action="search/search.php"
      method="get"
      accept-charset="utf-8">
    <label class="input_wrap" for="search2">
        <input id="search2" onfocus="if (this.value == 'Search') {
                                                        this.value = '';
                                                    }"
               onblur="if (this.value == '') {
                                                               this.value = 'Search';
                                                           }" type="text" name="s"
               value="Search"/>
    </label>
    <a onclick="document.getElementById('search').submit()"
       href="#">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/asset/images/search.png" alt=""/>
    </a>
</form>