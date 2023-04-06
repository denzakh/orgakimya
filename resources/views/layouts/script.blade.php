<script>
    (()=>{
        let toggle = (option) => {
            option.btn.onclick = () => {
                option.parent.classList.toggle("is-open")
            };
        }

        let dom = (cl) => document.querySelector(cl);

        toggle({
            btn: dom(".js-lng-btn"),
            parent: dom(".js-lng")
        });

        toggle({
            btn: dom(".js-nav-btn"),
            parent: dom(".js-nav")
        });
    })();
</script>