<x-app-layout title="Panel administration">
    @if(session('success'))
        <x-ui.block.notifications
            type="success"
            :message="session('success')"
        />
    @endif
    <x-ui.content.block-head
        :title="__('TABLEAU DE BORD')"
        :description="__('Ayez un aperçu global sur l\'ensemble du Personnel de l\'administration Publique du Haut-Katanga')"
    ></x-ui.content.block-head>

    <x-ui.content.container>
        <div class="row g-gs">
            <div class="col-xxl-6">
                <div class="row g-gs">
                    <div class="col-lg-6 col-xxl-12">
                        <div class="col-sm-6 col-lg-12 col-xxl-6">
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <div class="card-title-group align-start mb-2">
                                        <div class="card-title">
                                            <h6 class="title">Effectif par service</h6>
                                        </div>
                                    </div>
                                    <div class="flex-column gap-4">
                                        <div class="nk-sale-data flex justify-between align-items-center">
                                            <span>DFPP</span>
                                            <span class="sub-title">
                                                <span class="change down text-danger">

                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex-column gap-4">
                                        <div class="nk-sale-data flex justify-between align-items-center">
                                            <span>DRHKAT</span>
                                            <span class="sub-title">
                                                <span class="change down text-danger">

                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex-column gap-4">
                                        <div class="nk-sale-data flex justify-between align-items-center">
                                            <span>DRHKAT</span>
                                            <span class="sub-title">
                                                <span class="change down text-danger">

                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex-column gap-4">
                                        <div class="nk-sale-data flex justify-between align-items-center">
                                            <span>DPCEEM</span>
                                            <span class="sub-title">
                                                <span class="change down text-danger">

                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex-column gap-4">
                                        <div class="nk-sale-data flex justify-between align-items-center">
                                            <span>DPM</span>
                                            <span class="sub-title">
                                                <span class="change down text-danger">

                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-12">
                        <div class="row g-gs">
                            <div class="col-sm-6 col-lg-12 col-xxl-6">
                                <div class="card card-bordered">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-2">
                                            <div class="card-title">
                                                <h6 class="title">Personnel Actif</h6>
                                            </div>
                                        </div>
                                        <div class="flex-column gap-4">
                                            <div class="nk-sale-data flex justify-between align-items-center">
                                                <span>Homme</span>
                                                <span class="sub-title">
                                                <span class="change down">
                                                    {{ $homme }}
                                                </span>
                                            </span>
                                            </div>
                                        </div>
                                        <div class="flex-column gap-4">
                                            <div class="nk-sale-data flex justify-between align-items-center">
                                                <span>Femme</span>
                                                <span class="sub-title">
                                                <span class="change down">
                                                    {{ $femme }}
                                                </span>
                                            </span>
                                            </div>
                                        </div>
                                        <div class="flex-column gap-4">
                                            <div class="nk-sale-data flex justify-between align-items-center">
                                                <span>Total</span>
                                                <span class="sub-title">
                                                <span class="change down">
                                                    {{ $totals }}
                                                </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-12 col-xxl-6">
                                <div class="card card-bordered">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-2">
                                            <div class="card-title">
                                                <h6 class="title">Personnel Inactif</h6>
                                            </div>
                                        </div>
                                        <div class="flex-column gap-4">
                                            <div class="nk-sale-data flex justify-between align-items-center">
                                                <span>Homme</span>
                                                <span class="sub-title">
                                                <span class="change down">
                                                    {{ $inactifhomme }}
                                                </span>
                                            </span>
                                            </div>
                                        </div>
                                        <div class="flex-column gap-4">
                                            <div class="nk-sale-data flex justify-between align-items-center">
                                                <span>Femme</span>
                                                <span class="sub-title">
                                                <span class="change down">
                                                    {{ $inactiffemme }}
                                                </span>
                                            </span>
                                            </div>
                                        </div>
                                        <div class="flex-column gap-4">
                                            <div class="nk-sale-data flex justify-between align-items-center">
                                                <span>Total</span>
                                                <span class="sub-title">
                                                <span class="change down">
                                                    {{ $inactiftotals }}
                                                </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-12 col-xxl-6">
                                <div class="card card-bordered">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-2">
                                            <div class="card-title">
                                                <h6 class="title">Personnel Passif</h6>
                                            </div>
                                        </div>
                                        <div class="flex-column gap-4">
                                            <div class="nk-sale-data flex justify-between align-items-center">
                                                <span>Homme</span>
                                                <span class="sub-title">
                                                <span class="change down">
                                                    {{ $passifhomme }}
                                                </span>
                                            </span>
                                            </div>
                                        </div>
                                        <div class="flex-column gap-4">
                                            <div class="nk-sale-data flex justify-between align-items-center">
                                                <span>Femme</span>
                                                <span class="sub-title">
                                                <span class="change down">
                                                    {{ $passiffemme }}
                                                </span>
                                            </span>
                                            </div>
                                        </div>
                                        <div class="flex-column gap-4">
                                            <div class="nk-sale-data flex justify-between align-items-center">
                                                <span>Total</span>
                                                <span class="sub-title">
                                                <span class="change down">
                                                    {{ $passiftotals }}
                                                </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-ui.content.container>
</x-app-layout>
