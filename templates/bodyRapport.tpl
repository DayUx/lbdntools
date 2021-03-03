<section class="rapport-section">
    <div id=rapport-container class="all">
        <textarea placeholder="Lieu&#10Date&#10Grade&#10Nom Prénom" class=nom-prenom ></textarea>
        <textarea placeholder="Rapport" class=contenu ></textarea>
        <textarea class=titre placeholder="Titre"></textarea>
        <textarea class=inventaire placeholder="Inventaire"></textarea>
        <textarea class=regiment placeholder="Régiment, compagnie ..."></textarea>

    </div>
    <div class="element-div rapport">
        <div class="top-left">
            <div class="dropdown">
                <div class="inner">
                    <span>Rapport</span>
                    <span><img src="img/arrow-down-filled-triangle.svg"></span>
                </div>
                <div class="dropdown-content">
                    <button onclick="Rapport('all')" class="rapport-all">Rapport&nbspallemand</button>
                    <button onclick="Rapport('us')" class="rapport-us">Rapport&nbspaméricain</button>
                </div>
            </div>
            <button id=download onclick=DownloadAsImage2()></button>
        </div>
    </div>
    <div class="element-div form">
    </div>
</section>