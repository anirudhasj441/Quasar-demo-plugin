<div id="q-app">
    <div class="q-pa-md">
        <q-card>
            <div>
                <div>
                    <q-tabs v-model="tab" @click="show=true" active-color="accent" indicator-color="accent">
                        <div class="row justify-evenly" style="width: 100%;">
                            <div class="col">
                                <q-tab name="bar" label="Bar" />
                            </div>
                            <div class="col">
                                <q-tab name="pie" label="Pie" />
                            </div>
                            <div class="col">
                                <q-tab name="hist" label="Histogram">
                            </div>
                        </div>
                    </q-tabs>
                </div>
            </div>

            <q-tab-panels v-model="tab" keep-alive animated>
                <q-tab-panel name="bar">
                    <div class="row">
                        <div class="col-3">
                            <q-btn color="primary" class="glossy" label="plot" @click="plot_bar"></q-btn>
                        </div>
                        <div class="col-9">
                            <div id="bar-plot"></div>
                        </div>
                    </div>
                </q-tab-panel>
                <q-tab-panel name="pie">
                    <div class="row">
                        <div class="col-3">
                            <q-btn color="primary" class="glossy" label="plot" @click="plot_pie"></q-btn>
                        </div>
                        <div class="col-9">
                            <div id="pie-plot"></div>
                        </div>
                    </div>
                </q-tab-panel>
                <q-tab-panel name="hist">
                    <div class="row">
                        <div class="col-3">
                            <q-btn color="primary" class="glossy" @click="plot_hist" label="plot"></q-btn>
                        </div>
                        <div class="col-9">
                            <div id="hist-plot"></div>
                        </div>
                    </div>
                </q-tab-panel>
            </q-tab-panels>
        </q-card>
    </div>
</div>

<script src="https://unpkg.com/vue@next"></script>
<script src="https://cdn.jsdelivr.net/npm/quasar@2.0.0/dist/quasar.umd.prod.js"></script>
<script src="<?= plugin_dir_url(__FILE__) . '../js/app.js'; ?>"></script>