@php use App\Enums\StateCarrier; @endphp
<div>
    <x-ui.content.block-head :title="__('Detail agent')">
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
                                    <span>{{ $agent->person->name }} {{ $agent->person->username }}</span>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Prenom:</span>
                                    <span>{{ $agent->person->firstname }}</span>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Genre:</span>
                                    <span>{{ $agent->person->gender }}</span>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Etat civil:</span>
                                    <span>{{ $agent->person->marital_status }}</span>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Date de naissance:</span>
                                    <span>{{ $agent->person->birthdate }}</span>
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
                                    <h6 class="title">Identiter</h6>
                                    <span class="accordion-icon"></span>
                                </a>
                                <div class="accordion-body collapse show" id="accordion-item-2-1"
                                     data-bs-parent="#accordion-2">
                                    <div class="accordion-inner">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            non proident, sunt in culpa qui officia deserunt mollit anim id est
                                            laborum.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse"
                                   data-bs-target="#accordion-item-2-2">
                                    <h6 class="title">Grade</h6>
                                    <span class="accordion-icon"></span>
                                </a>
                                <div class="accordion-body collapse" id="accordion-item-2-2"
                                     data-bs-parent="#accordion-2">
                                    <div class="accordion-inner">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            non proident, sunt in culpa qui officia deserunt mollit anim id est
                                            laborum.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse"
                                   data-bs-target="#accordion-item-2-3">
                                    <h6 class="title">Engagement</h6>
                                    <span class="accordion-icon"></span>
                                </a>
                                <div class="accordion-body collapse" id="accordion-item-2-3"
                                     data-bs-parent="#accordion-2">
                                    <div class="accordion-inner">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            non proident, sunt in culpa qui officia deserunt mollit anim id est
                                            laborum.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse"
                                   data-bs-target="#accordion-item-2-4">
                                    <h6 class="title">Mobiliter</h6>
                                    <span class="accordion-icon"></span>
                                </a>
                                <div class="accordion-body collapse" id="accordion-item-2-4"
                                     data-bs-parent="#accordion-2">
                                    <div class="accordion-inner">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            non proident, sunt in culpa qui officia deserunt mollit anim id est
                                            laborum.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse"
                                   data-bs-target="#accordion-item-2-5">
                                    <h6 class="title">Affectation</h6>
                                    <span class="accordion-icon"></span>
                                </a>
                                <div class="accordion-body collapse" id="accordion-item-2-5"
                                     data-bs-parent="#accordion-2">
                                    <div class="accordion-inner">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            non proident, sunt in culpa qui officia deserunt mollit anim id est
                                            laborum.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.</p>
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
