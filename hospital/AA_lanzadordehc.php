<HEAD>
    <script language="JavaScript">
        function fullwin() {
            alert("Para cerrar la ventana pulsa en tu teclado: ALT+F4");
            var params = 'width=' + screen.width;
            params += ', height=' + screen.height;
            params += ', top=0, left=0'
            params += ', fullscreen=yes';
            window.open("http://localhost/gentelella-master/production/plain_page.php", "", params);
        }
    </script>
</HEAD>

<BODY onload="javascript:fullwin()">
</BODY>