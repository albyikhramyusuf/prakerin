$.ajax({
    url: 'api/beritaterbaru',
    dataType: 'json',
    success:function(getdata){
        $.each(getdata.data,function(key,value){
            $(".berita-terbaru").append(
                `
                <div class="single-blog-post style-3">
                <div class="post-thumb">
                    <a href="#"><img src="assets/img/artikel/${value.foto}" alt=""></a>
                </div>
                <div class="post-data">
                    <a href="#" class="post-catagory">${value.kategori.nama_kategori}</a>
                    <a href="#" class="post-title">
                        <h6>${value.judul}</h6>
                    </a>
                    <div class="post-meta d-flex align-items-center">
                        <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                        <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                    </div>
                </div>
            </div>
                `
            )
        })
    }
})