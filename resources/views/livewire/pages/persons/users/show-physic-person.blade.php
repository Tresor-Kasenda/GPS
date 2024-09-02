<div>
    <x-ui.content.block-head :title="__('Detail agent')">
        <x-ui.block.button.link
            icon="arrow-long-left"
            :route="route('persons.lists-physic-person')"
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
                                    <img src="{{ $person->image }}" alt="{{ $person->firstname }}">
                                </div>
                                <div class="user-info">
                                    <div class="badge bg-light rounded-pill ucap">{{ $person->gender }}</div>
                                    <h5>{{ $person->name }} {{ $person->firstname }}</h5>
                                    <span class="sub-text">{{ $person->email }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-inner">
                            <h6 class="overline-title mb-2">Detail de l'agent</h6>
                            <div class="row g-3">
                                <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Nom et Post-Nom:</span>
                                    <span>{{ $person->name }} {{ $person->username }}</span>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Prenom:</span>
                                    <span>{{ $person->firstname }}</span>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Genre:</span>
                                    <span>{{ $person->gender }}</span>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Etat civil:</span>
                                    <span>{{ $person->marital_status }}</span>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Date de naissance:</span>
                                    <span>{{ $person->birthdate }}</span>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Adresse:</span>
                                    <span>{{ $person->address }}</span>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Telephone:</span>
                                    <span>{{ $person->phone_number }}</span>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Register At:</span>
                                    <span>Nov 24, 2019</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xl-8 col-xxl-9">
                <div class="card">
                    <div class="card-inner">
                        <div class="nk-block">
                            <div class="overline-title-alt mb-2 mt-2">In Account</div>
                            <div class="profile-balance">
                                <div class="profile-balance-group gx-4">
                                    <div class="profile-balance-sub">
                                        <div class="profile-balance-amount">
                                            <div class="number">237.89 <small
                                                    class="currency currency-usd">USD</small></div>
                                        </div>
                                        <div class="profile-balance-subtitle">Wallet Balance</div>
                                    </div>
                                    <div class="profile-balance-sub">
                                                <span class="profile-balance-plus text-soft"><em
                                                        class="icon ni ni-plus"></em></span>
                                        <div class="profile-balance-amount">
                                            <div class="number">1,643</div>
                                        </div>
                                        <div class="profile-balance-subtitle">Credit Points</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <h6 class="lead-text mb-3">Recent Orders</h6>
                            <div class="nk-tb-list nk-tb-ulist is-compact card">
                                <div class="nk-tb-item nk-tb-head">
                                    <div class="nk-tb-col">
                                        <span class="sub-text">Order ID</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-sm">
                                        <span class="sub-text">Product Name</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-xxl">
                                        <span class="sub-text">Total Price</span>
                                    </div>
                                    <div class="nk-tb-col">
                                        <span class="sub-text">Status</span>
                                    </div>
                                    <div class="nk-tb-col">
                                        <span class="sub-text">Delivery</span>
                                    </div>
                                </div>
                                <div class="nk-tb-item">
                                    <div class="nk-tb-col">
                                        <a href="#"><span class="fw-bold">#4947</span></a>
                                    </div>
                                    <div class="nk-tb-col tb-col-sm">
                                                                    <span class="tb-product">
                                                                        <img src="./images/product/c.png" alt=""
                                                                             class="thumb">
                                                                        <span
                                                                            class="title">Black Mi Band Smartwatch</span>
                                                                    </span>
                                    </div>
                                    <div class="nk-tb-col tb-col-xxl">
                                        <span class="amount">$ 89.49</span>
                                    </div>
                                    <div class="nk-tb-col">
                                        <span class="lead-text text-warning">Shipped</span>
                                    </div>
                                    <div class="nk-tb-col">
                                        <span class="sub-text">In 2 days</span>
                                    </div>
                                </div>
                                <div class="nk-tb-item">
                                    <div class="nk-tb-col">
                                        <a href="#"><span class="fw-bold">#4948</span></a>
                                    </div>
                                    <div class="nk-tb-col tb-col-sm">
                                                                    <span class="tb-product">
                                                                        <img src="./images/product/b.png" alt=""
                                                                             class="thumb">
                                                                        <span class="title">Purple Smartwatch</span>
                                                                    </span>
                                    </div>
                                    <div class="nk-tb-col tb-col-xxl">
                                        <span class="amount">$299.49</span>
                                    </div>
                                    <div class="nk-tb-col">
                                        <span class="lead-text text-success">Delivered</span>
                                    </div>
                                    <div class="nk-tb-col">
                                        <span class="sub-text">12 Dec, 2020</span>
                                    </div>
                                </div>
                                <div class="nk-tb-item">
                                    <div class="nk-tb-col">
                                        <a href="#"><span class="fw-bold">#4949</span></a>
                                    </div>
                                    <div class="nk-tb-col tb-col-sm">
                                                                    <span class="tb-product">
                                                                        <img src="./images/product/a.png" alt=""
                                                                             class="thumb">
                                                                        <span class="title">Pink Fitness Tracker</span>
                                                                    </span>
                                    </div>
                                    <div class="nk-tb-col tb-col-xxl">
                                        <span class="amount">$99.49</span>
                                    </div>
                                    <div class="nk-tb-col">
                                        <span class="lead-text text-danger">Canceled</span>
                                    </div>
                                    <div class="nk-tb-col">
                                        <span class="sub-text">Never</span>
                                    </div>
                                </div>
                            </div><!-- .nk-tb-list -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
