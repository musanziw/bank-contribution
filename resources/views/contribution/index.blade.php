<x-cashier-layout>
    <div class="nk-content-body">
        <div class="nk-block-head">
            <div class="nk-block-between g-3">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Cotisations</h3>
                    <div class="nk-block-des text-soft">
                        <p>Il y a {{ $contributions->total() }} cotisations.</p>
                    </div>
                </div>
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <div class="toggle-expand-content">
                            <ul class="justify-between g-3">
                                <li>
                                    <x-text-input type="number" wire:model.debounce.500="search"
                                                  placeholder="Entrer l'id de l'agent"/>
                                </li>
                                <li>
                                    <x-text-input type="text"
                                                  name="started_at"
                                                  wire:model="start"
                                                  placeholder="Date debut"
                                                  data-provide="datepicker"/>
                                </li>
                                <li>
                                    <x-text-input type="text"
                                                  placeholder="Date fin"
                                                  wire:model="end"
                                                  data-provide="datepicker"/>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if($contributions->count() > 0)
            <div class="card card-bordered card-preview">
                <table class="table table-orders">
                    <thead class="tb-odr-head">
                    <tr class="tb-odr-item">
                        <th class="tb-odr-info">
                            Montant
                        </th>
                        <th class="tb-odr-info">
                            Par
                        </th>
                        <th class="tb-odr-info">
                            Pour
                        </th>
                        <th class="tb-odr-info">
                            Date
                        </th>
                    </tr>
                    </thead>
                    <tbody class="tb-odr-body">
                    @foreach($contributions as $contribution)
                        <tr class="tb-odr-item">
                            <td class="tb-odr-info">
                                <span class="tb-odr-id">{{ $contribution->amount }} $</span>
                            </td>
                            <td class="tb-odr-info">
                                <span class="tb-odr-id">{{ $contribution->user->name }}</span>
                            </td>
                            <td class="tb-odr-info">
                                <span class="tb-odr-id">{{ $contribution->client->name }}</span>
                            </td>
                            <td class="tb-odr-info">
                                <span class="tb-odr-id">{{ $contribution->created_at->translatedFormat('d M Y')}}</span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-inner">
                {{ $contributions->links() }}
            </div>
        @else
            <h6>Aucune contribution.</h6>
        @endif
    </div>
</x-cashier-layout>
