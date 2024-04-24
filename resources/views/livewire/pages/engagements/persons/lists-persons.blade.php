<div>
    <x-contents.brandcrumb
            title="Liste des personnels"
            action="Ajouter un personnel"
            :route="route('add-person')"
    />
    <div class="nk-block nk-block-lg">
        <div class="row g-gs">
            @foreach($peoples as $person)
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <div class="team">
                                <div class="team-options">
                                    <div class="drodown">
                                        <a class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                           data-bs-toggle="dropdown"
                                           href="#">
                                            <em class="icon ni ni-more-h"></em>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li>
                                                    <a href="{{ route('show-person', $person->id) }}">
                                                        <em class="icon ni ni-focus"></em>
                                                        <span>Voir Detail</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('edit-person', $person->id) }}">
                                                        <em class="icon ni ni-eye"></em>
                                                        <span>Editer</span>
                                                    </a>
                                                </li>
                                                <li class="divider"></li>

                                                <li>
                                                    <a href="#">
                                                        <em class="icon ni ni-na"></em>
                                                        <span>Supprimer</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="user-card user-card-s2">
                                    <div class="user-avatar lg bg-primary">
                                        <img alt="{{ $person->name }}"
                                             src="{{ asset('storage/'.$person->profile_picture) }}">
                                        <div class="status dot dot-lg dot-success"></div>
                                    </div>
                                    <div class="user-info">
                                        <h6>{{ $person->name . " " . $person->firstname }}</h6>
                                        <span class="sub-text">UI/UX Designer</span>
                                    </div>
                                </div>
                                <ul class="team-info">
                                    <li><span>Date Naissance</span><span>{{ $person->birthday() }}</span></li>
                                    <li><span>Contact</span><span>{{ $person->phone_number }}</span></li>
                                    <li><span>Etat Civil</span><span>{{ $person->marital_status }}</span></li>
                                </ul>
                                <div class="team-view">
                                    <a class="btn btn-block btn-dim btn-primary"
                                       href="{{ route('show-person', $person->id) }}"><span>View Profile</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
