
<form id="product-form" method="POST" action="" >

	<div class="wrap-field">
	    <label>Tên sản phẩm: </label>
	    <input type="text" name="name" value="" />
	    <div class="clear-both"></div>
	</div>
	<div class="wrap-field">
	    <label>Giá sản phẩm: </label>
	    <input type="text" name="price" value="" />
	    <div class="clear-both"></div>
	</div>
	<div class="wrap-field">
	    <label>Ảnh đại diện: </label>
	    <div class="right-wrap-field">
	        <input type="file" name="image" />
	    </div>
	    <div class="clear-both"></div>
	</div>
	<div class="wrap-field">
	    <label>Thư viện ảnh: </label>
	    <div class="right-wrap-field">
	        <input multiple="" type="file" name="gallery[]" />
	    </div>
	    <div class="clear-both"></div>
	</div>
	<div class="wrap-field">
	    <label>Nội dung: </label>
	    <textarea name="content" id="product-content"></textarea>
	    <div class="clear-both"></div>
	</div>
	
</form>
