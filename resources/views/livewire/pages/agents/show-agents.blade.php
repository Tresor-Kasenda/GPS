@php use App\Enums\StateCarrier;use App\Models\Affectation;use App\Models\LevelAttribution;use App\Models\TransferAgent; @endphp
<div>
    <x-ui.content.block-head :title="__('Profil Agent')">
        <x-ui.block.button.link
            icon="arrow-long-left"
            :route="route('agent.agents-lists')"
            :action="__('Voir les listes')"
        />
    </x-ui.content.block-head>
    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-lg-4 col-xl-4 col-xxl-3">
                <div class="card">
                    <div class="card-inner-group">
                        <div class="card-inner">
                            <div class="user-card user-card-s2">
                                <div class="user-avatar lg bg-primary">
                                    <img src="{{ $agent->person->image }}" alt="{{ $agent->person->firstname }}">
                                </div>
                                <div class="user-info">
                                    <div class="badge bg-light rounded-pill ucap">{{ $agent->person->gender }}</div>
                                    <h5>{{ $agent->person->name }} {{ $agent->person->firstname }}</h5>
                                    <span class="sub-text">{{ $agent->person->email }}</span>
                                </div>
                                <div>
                                    <span class="sm">Status: </span>
                                    <span
                                    @class([
                                        'badge lg',
                                        'bg-primary' => $agent->status === StateCarrier::PROGRESSING,
                                        'bg-secondary' => $agent->status === StateCarrier::PENDING,
                                        'bg-success' => $agent->status === StateCarrier::ACTIVE,
                                        'bg-warning' => $agent->status === StateCarrier::INACTIVE,
                                        'bg-danger' => $agent->status === StateCarrier::RESIGNATION,
                                    ])
                                >{{ $agent->status }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-inner">
                            <h6 class="overline-title mb-2">Detail de l'agent</h6>
                            <div class="row g-3">
                                <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Nom et Post-Nom:</span>
                                    <span>{{ $agent->person->name }} {{ $agent->person->username }} {{ $agent->person->firstname }}</span>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Fonction Actuel:</span>
                                    @php
                                        $fonction = Affectation::where('agent_id', $agent->id)->first();
                                        $promotion = LevelAttribution::where('agent_id', $agent->id)->first();
                                        $actuel;
                                        if ($promotion->grade_id) {
                                            $actuel = $promotion->grade->designation;
                                        } else {
                                            $actuel = $agent->hiring->service->designation;
                                        }
                                        $transfer = TransferAgent::where('agent_id', $agent->id)->first();
                                    @endphp
                                    <span>{{ $fonction->companyFunction->name_function }}</span>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Grade Actuel:</span>
                                    <span>{{ $actuel }}</span>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Service Actuel:</span>
                                    <span>{{ $transfer->service->title }}</span>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Matricule:</span>
                                    <span>{{ $agent->person_number }}</span>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Ancienneté:</span>
                                    <span>{{ $agent->seniority }} ans</span>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Date d'engagement:</span>
                                    <span>{{ $agent->hiring->hiring_date->format('d-m-Y') }}</span>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Adresse:</span>
                                    <span>{{ $agent->person->address }}</span>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Telephone:</span>
                                    <span>{{ $agent->person->phone_number }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xl-8 col-xxl-9">
                <div class="card">
                    <div class="card-inner">
                        <div id="accordion-2" class="accordion accordion-s3">
                            <div class="accordion-item">
                                <a href="#" class="accordion-head" data-bs-toggle="collapse"
                                   data-bs-target="#accordion-item-2-1">
                                    <h6 class="title">Affectation</h6>
                                    <span class="accordion-icon"></span>
                                </a>
                                <div class="accordion-body collapse show" id="accordion-item-2-1"
                                     data-bs-parent="#accordion-2">
                                    <div class="accordion-inner">
                                        <div class="nk-tb-list nk-tb-ulist is-compact card">
                                            <div class="nk-tb-item nk-tb-head">
                                                <div class="nk-tb-col">
                                                    <span class="sub-text">N°</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="sub-text">Date</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="sub-text">Fonction</span>
                                                </div>
                                            </div>
                                            @foreach($agent->affectations as $affectation)
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col">
                                                        <span>{{ $affectation->id }}</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                    <span class="tb-product">
                                                        <span
                                                            class="title">{{ $affectation->date_affectation->format('d-m-Y') }}</span>
                                                    </span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span
                                                            class="amount">{{ $affectation->companyFunction->name_function }}</span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse"
                                   data-bs-target="#accordion-item-2-2">
                                    <h6 class="title">Transfert</h6>
                                    <span class="accordion-icon"></span>
                                </a>
                                <div class="accordion-body collapse" id="accordion-item-2-2"
                                     data-bs-parent="#accordion-2">
                                    <div class="accordion-inner">
                                        <div class="nk-tb-list nk-tb-ulist is-compact card">
                                            <div class="nk-tb-item nk-tb-head">
                                                <div class="nk-tb-col">
                                                    <span class="sub-text">N°</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="sub-text">Service Provenance</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="sub-text">Service Actuel</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="sub-text">Date</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="sub-text">Motif</span>
                                                </div>
                                            </div>
                                            @foreach($agent->transfers as  $key => $transfer)
                                                <div class="nk-tb-item">

                                                    <div class="nk-tb-col">
                                                        <span>{{ $key +1  }}</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                    <span class="tb-product">
                                                        <span
                                                            class="title">{{ $transfer->service->title }}</span>
                                                    </span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span
                                                            class="amount">{{ $transfer->service->title }}</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span
                                                            class="amount">{{ $transfer->transfer_date->format('d-m-Y') }}</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span
                                                            class="amount">{{ $transfer->motif }}</span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse"
                                   data-bs-target="#accordion-item-2-3">
                                    <h6 class="title">Mobilité</h6>
                                    <span class="accordion-icon"></span>
                                </a>
                                <div class="accordion-body collapse" id="accordion-item-2-3"
                                     data-bs-parent="#accordion-2">
                                    <div class="accordion-inner">
                                        <div class="nk-tb-list nk-tb-ulist is-compact card">
                                            <div class="nk-tb-item nk-tb-head">
                                                <div class="nk-tb-col">
                                                    <span class="sub-text">N°</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="sub-text">Date</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="sub-text">Type</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="sub-text">Date debut</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="sub-text">Date fin</span>
                                                </div>
                                            </div>
                                            @foreach($agent->mobilities as  $key => $mobility)
                                                <div class="nk-tb-item">

                                                    <div class="nk-tb-col">
                                                        <span>{{ $key +1  }}</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                    <span class="tb-product">
                                                        <span
                                                            class="title">{{ $mobility->mobility_date->format('d-m-Y') }}</span>
                                                    </span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span
                                                            class="amount">{{ $mobility->mobility_type }}</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span
                                                            class="amount">{{ $mobility->start_date->format('d-m-Y') }}</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span
                                                            class="amount">{{ $mobility->end_date->format('d-m-Y') }}</span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse"
                                   data-bs-target="#accordion-item-2-4">
                                    <h6 class="title">Promotion</h6>
                                    <span class="accordion-icon"></span>
                                </a>
                                <div class="accordion-body collapse" id="accordion-item-2-4"
                                     data-bs-parent="#accordion-2">
                                    <div class="accordion-inner">
                                        <div class="nk-tb-list nk-tb-ulist is-compact card">
                                            <div class="nk-tb-item nk-tb-head">
                                                <div class="nk-tb-col">
                                                    <span class="sub-text">N°</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="sub-text">Grade</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="sub-text">Date</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="sub-text">Motif</span>
                                                </div>
                                            </div>
                                            @foreach($agent->promotions as  $key => $promotion)
                                                <div class="nk-tb-item">

                                                    <div class="nk-tb-col">
                                                        <span>{{ $key +1  }}</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                    <span class="tb-product">
                                                        <span
                                                            class="title">{{ $promotion->grade->designation }}</span>
                                                    </span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span
                                                            class="amount">{{ $promotion->date_allocated->format('d-m-Y') }}</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span
                                                            class="amount">{{ $promotion->motif_attribution }}</span>
                                                    </div>
                                                </div>
                                            @endforeach
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
</div>
