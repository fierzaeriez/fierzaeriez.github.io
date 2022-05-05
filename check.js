AOS.init();
        hljs.highlightAll();

        function pilihsemua()
        {
            var daftarku = document.getElementsByName("daftarku[]");
            var jml=daftarku.length;
            var b=0;
            for (b=0;b<jml;b++)
            {
                daftarku[b].checked=true;
                
            }
        }

        function bersihkan()
        {
            var daftarku = document.getElementsByName("daftarku[]");
            var jml=daftarku.length;
            var b=0;
            for (b=0;b<jml;b++)
            {
                daftarku[b].checked=false;
                
            }
        }
