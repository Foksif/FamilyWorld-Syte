

<section class="intro">
    <div class="container">
        <div class="intro__content">
            <div class="intro__block">
                <h1 class="intro__title">FamilyWorld Твой мир приключений!</h1>
                <h3 class="intro__sub-title">FamilyWorld - комьюнити друзей, контент мейкеров и просто хороших людей.</h3>
                <a href="" class="btn">В магазин</a> <a id="copy-button" class="ip">IP: mc.f-world.su</a>
            </div>
            <div class="intro__blok">
                <div class="intro__herro">
                    <img src="/public/images/herro.png" alt="" class="intro__herro-img">
                </div>
            </div>
        </div> 
    </div> 
</section>


<script>
    $(document).ready(function() {
    $('#copy-button').click(function() {
        var text = 'mc.f-world.su';
        var input = $('<textarea>').val(text).appendTo('body').select();
        document.execCommand('copy');
        input.remove();
        alert("IP успешно скопированн!");
    });
    });
</script>