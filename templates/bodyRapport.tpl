<section class="rapport-section">
    <div id=rapport-container>
        <textarea placeholder="Lieu&#10Date&#10Grade&#10Nom Prénom" class=nom-prenom value="nom / prénom"></textarea>
        <textarea class=contenu value="contenu du rapport"></textarea>
        <textarea class=titre value="contenu du rapport"></textarea>

    </div>
    <div class="element-div rapport">
        <div class="top-left">
            <div class="dropdown">
                <div class="inner">
                    <span>Rapport</span>
                    <span><img src="img/arrow-down-filled-triangle.svg"></span>
                </div>
                <div class="dropdown-content">
                    <button class="rapport-all">Rapport&nbspallemand</button>
                    <button class="rapport-us">Rapport&nbspaméricain</button>
                </div>
            </div>
            <button id=download onclick=DownloadAsImage2()></button>
        </div>
    </div>
    <div class="element-div form">
    </div>
</section>