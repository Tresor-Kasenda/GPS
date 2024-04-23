<div>
    <x-contents.brandcrumb
            title="Liste des Bureau"
            action="Ajouter un Bureau"
            :route="route('add-office')"
    />
    <div class="card card-bordered card-preview">
        <div class="card-inner">
            <table class="datatable-init nk-tb-list nk-tb-ulist"
                   data-auto-responsive="false">
                <thead>
                <tr class="nk-tb-item nk-tb-head">
                    <th class="nk-tb-col nk-tb-col-check">
                        <div class="custom-control custom-control-sm custom-checkbox notext">
                            <input type="checkbox" class="custom-control-input"
                                   id="uid">
                            <label class="custom-control-label" for="uid"></label>
                        </div>
                    </th>
                    <th class="nk-tb-col">
                        <span class="sub-text">Division</span>
                    </th>
                    <th class="nk-tb-col">
                        <span class="sub-text">Prioriter</span>
                    </th>
                    <th class="nk-tb-col tb-col-mb">
                        <span class="sub-text">Sigle</span>
                    </th>
                    <th class="nk-tb-col tb-col-md">
                        <span class="sub-text">Designation</span>
                    </th>

                    <th class="nk-tb-col nk-tb-col-tools text-end">
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($offices as $key => $office)
                    <tr class="nk-tb-item" wire:key="{{ $key }}">
                        <td class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="uid1">
                                <label class="custom-control-label" for="uid1"></label>
                            </div>
                        </td>

                        <td class="nk-tb-col tb-col-md">
                            <span>{{ $office?->division->abbreviation }}</span>
                        </td>

                        <td class="nk-tb-col tb-col-md">
                            <span>{{ $office->priority }}</span>
                        </td>

                        <td class="nk-tb-col tb-col-md">
                            <span>{{ $office->abbreviation }}</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <span>{{ $office->designation }}</span>
                        </td>
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                           data-bs-toggle="dropdown">
                                            <em class="icon ni ni-more-h"></em>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li>
                                                    <a
                                                            href="{{ route('edit-office', $office->id) }}">
                                                        <em class="icon ni ni-edit-fill"></em>
                                                        <span>Editer</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>