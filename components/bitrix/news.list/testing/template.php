<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

?>

<div id="barba-wrapper">
   <div class="article-list">

      <?php foreach($arResult["ITEMS"] as $arItem): ?>
      
		<a class="article-item article-list__item" href="for-individuals.html" data-anim="anim-3" >
         <div class="article-item__background">
            <img src=<?=$arItem['PREVIEW_PICTURE']['SRC'];?>
               data-src="xxxHTMLLINKxxx0.39186223192351520.41491856731872767xxx" alt="" />
         </div>
         <div class="article-item__wrapper">
            <div class="article-item__title"><?=$arItem["NAME"];?></div>
            <div class="article-item__content"><?=$arItem["PROPERTIES"]["DESC"]["VALUE"];?>
            </div>
         </div>
      </a>
		

      <?php endforeach; ?>

   </div>
</div>
