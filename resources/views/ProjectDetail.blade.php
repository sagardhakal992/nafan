
               <section class="page">
                  <div class="container">
                     <div class="row">
                        <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9 text-black prod__detail">
                           <h2>{{$project->title}}</h2>
                           <p><strong>Starting Date:</strong>{{date($project->start_date)}}<br />
                              <strong>Ending Date:</strong>{{date($project->end_date)}}<br />
                              <strong>Location:</strong>{{$project->location}}<br />
                              <strong>Donor(s):{{$project->donor}}
                           </p>
                           <?php echo $project->description  ?>
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3 pl-sm-0 pr-sm-0 sticky-div">
                           <div class="bg-white shadow pr pl pt pb mb">
                              <table class="table table-hover">
                                 <thead>
                                    <tr>
                                       <th>Projects</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td><a href="/projects/past-projects" title="Past Projects">Past Projects</a></td>
                                    </tr>
                                    <tr>
                                       <td><a href="/projects" title="Current Projects">Current Projects</a></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <div class="bg-green pr pl pt pb mb">
                              <table class="table table-hover">
                                 <thead>
                                    <tr>
                                       <th>Related Items</th>
                                    </tr>
                                 </thead>
                                 <tbody class="item-list">
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/preparation-of-a-resources-inventory-and-review-and-revision-of-operational-plan-of-the-targeted-community-forests-of-in-maps-working-districts">Preparation of a resources inventory and review and revision of operational plan of the targeted community forests of IN-MAPS working districts</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/jiri-drinking-water-and-sanitation-program--a-part-of-community-benefits-and-economic-diversification-program-in-nepal">Jiri drinking water and sanitation program: A part of community benefits and economic diversification program in Nepal</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/value-chain--market-studies-for-orthodox-tea,-ginger,-lentils-and-off-season-vegetables">Value chain/ Market studies for Orthodox tea, Ginger, Lentils and Off-season vegetables</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/succeeding-with-cites--sustainable-and-equitable-jatamansi-trade-from-nepal">Succeeding with CITES: Sustainable and equitable Jatamansi trade from Nepal</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/forest-carbon-partnership-facility--fcpf--capacity-building-on-redd--for-civil-society-organizations-and-local-communities-%E2%80%8Ein-east-asia-and-the-pacific-region">Forest Carbon Partnership Facility (FCPF)-Capacity building on REDD+ for civil society organizations and local communities ‎in East Asia and the Pacific region</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/making-technical-education-practical-and-accessible-for-rural-communities">Making technical education practical and accessible for rural communities</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/strengthening%C2%A0forest%C2%A0dependent%C2%A0communities-in%C2%A0nepal-through-capacity-building%C2%A0around-sustainable-forest-management%C2%A0and-forest-certification">Strengthening forest dependent communities in Nepal through capacity building around sustainable forest management and forest certification</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/nudging-children-toward-healthier-food-choices--an-experiment-combining-school-and-home-gardens">Nudging children toward healthier food choices: An experiment combining school and home gardens</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/implementation-of-a-wfp-assistance-programme---home-grown-school-feeding-package-for-school-meals-programme">Implementation of a WFP assistance programme - Home grown school feeding package for school meals programme</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/supporting-communities-to-conserve-forest-biodiversity-and-environment---a-pilot-initiative-in-nawalpur,-province-no.-4,-nepal">Supporting communities to conserve forest biodiversity and environment:  A pilot initiative in Nawalpur, Province no. 4, Nepal</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/resilient-community-development--natural-resources-stewardship-for-community-development">Resilient community development: Natural resources stewardship for community development</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/value-chain-study-of-tomato-and-cauliflower-in-two-districts-of-nepal">Value chain study of Tomato and Cauliflower in two districts of Nepal</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/a-market-study-for-nepalese-ginger-and-its-derivatives-in-india-and-bangladesh-markets">A market study for Nepalese ginger and its derivatives in India and Bangladesh markets</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/climate-smart-agriculture-in-the-himalaya-%E2%80%93-an-innovative-green-business-model-for-food-security-and-poverty-reduction-of-mountainous-communities-of-nepal">Climate smart agriculture in the Himalaya – An innovative green business model for food security and poverty reduction of mountainous communities of Nepal</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/preparing-impact-evaluation-design-for-two-redd--projects-in-india-and-nepal">Preparing impact evaluation design for two REDD+ projects in India and Nepal</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/nepal-center-of-excellence-in-rural-development--designing-agribusiness-model-for-ecosystem-based-commercial-agriculture-%5Bphase-i,-year-ii%5D">Nepal center of excellence in rural development: Designing agribusiness model for ecosystem-based commercial agriculture [Phase I, Year II]</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/fighting-zoonoses-in-afghanistan,-bangladesh-and-nepal--abn---increasing-awareness,-prevention,-&amp;-control-of-zoonoses">Fighting zoonoses in Afghanistan, Bangladesh and Nepal (ABN)- Increasing awareness, prevention, &amp; control of zoonoses</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/surkhet-drinking-water-project">Surkhet drinking water project</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/supporting-communities-to-conserve-forest-biodiversity-and-environment--a-pilot-initiative-in-shivamandir-vdc,-nawalparasi,-nepal">Supporting communities to conserve forest biodiversity and environment: A pilot initiative in Shivamandir VDC, Nawalparasi, Nepal</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/development-of-biomass-energy-strategy-for-nepal">Development of biomass energy strategy for Nepal</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/nepal-center-of-excellence-in-rural-development--designing-agribusiness-model-for-ecosystem-based-commercial-agriculture-%5Bphase-i,-year-i%5D">Nepal center of excellence in rural development: Designing agribusiness model for ecosystem-based commercial agriculture [Phase I, Year I]</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/sikre-community-water-supply-and-repair-maintenance-project">Sikre community water supply and repair maintenance project</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/economic-growth-for-social-justice--supporting-ntfp-trade-and-business-development-in-karnali">Economic growth for social justice: Supporting NTFP trade and business development in Karnali</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/construction-and-repair-maintenance-of-clean-drinking-water-in-masding-and-kapti-community-of-dolakha-district">Construction and repair maintenance of clean drinking water in Masding and Kapti community of Dolakha district</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/value-chain-analysis-and-baseline-assessments-of-timur,-off-season-vegetables,-turmeric-and-meat-products-in-mid-and-far-western-regions-of-nepal">Value chain analysis and baseline assessments of Timur, Off-season vegetables, Turmeric and Meat products in mid and far-western regions of Nepal</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/forest-connect-nepal-phase-ii">Forest Connect Nepal Phase II</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/examining-the-implications-of-redd-payments-on-livelihoods-and-local-economic-development-in-nepal">Examining the implications of REDD payments on livelihoods and local economic development in Nepal</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/design-and-setting-up-of-a-governance-and-payment-system-for-nepal%E2%80%99s-community-forest-management-under-reduced-emission-from-deforestation-and-degradation--redd----phase-ii">Design and setting up of a governance and payment system for Nepal’s community forest management under Reduced Emission from Deforestation and Degradation (REDD) - Phase II</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/forest-connect-nepal-phase-i">Forest Connect Nepal Phase I</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/towards-developing-a-center-of-excellence-in-development-and-practical-application-of-rural-development-strategies">Towards developing a center of excellence in development and practical application of rural development strategies</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/design-and-setting-up-of-a-governance-and-payment-system-for-nepal%E2%80%99s-community-forestry-for-management-under-reduced-emission-from-deforestation-and-degradation--redd----phase-i">Design and setting up of a governance and payment system for Nepal’s community forestry for management under Reduced Emission from Deforestation and Degradation (REDD) - Phase I</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/enhancing-livelihoods-and-poverty-reduction-of-mountain-people-by-linking-value-products-and-services--hvp--to-value-chain-development">Enhancing livelihoods and poverty reduction of mountain people by linking value products and services (HVP) to value chain development</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/transforming-local-communities-into-enterprises-for-economic-security-in-nepal">Transforming local communities into enterprises for economic security in Nepal</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/assessment-of-carbon-stock-in-the-chitwan-annapurna-landscape-for-redd-">Assessment of carbon stock in the Chitwan Annapurna Landscape for REDD+</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/expanding-fsc-certification-at-landscape-level-through-incorporating-additional-eco-system-services">Expanding FSC certification at landscape-level through incorporating additional eco-system services</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/energy-gardens-for-small-scale-farmers-in-nepal--institutions,-species-and-technology">Energy gardens for small-scale farmers in Nepal: Institutions, species and technology</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/poverty-reduction-through-crop-intensification-in-rice-fallows--rrc--&amp;-new-rice-seed-from-client-oriented-breeding">Poverty reduction through crop intensification in rice fallows (RRC) &amp; New rice seed from client oriented breeding</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/publications/baseline-survey-and-pre-kap--knowledge,-attitude-and-practice---study-in-chitwan,-rupandehi-and-banke-districts-for-one-health-asia-programme--ohap--in-nepal">Baseline survey and Pre-KAP (Knowledge, Attitude and Practice): Study in Chitwan, Rupandehi and Banke districts for One Health Asia Programme (OHAP) in Nepal</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/publications/forest-carbon-stock-in-community-forests-in-three-watersheds--ludikhola,-kayarkhola-and-charnawati-">Forest carbon stock in community forests in three watersheds (Ludikhola, Kayarkhola and Charnawati)</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/publications/forest-connect-3rd-year-initiative-report">Forest connect 3rd year initiative report</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/development-of-a-methodological-framework--methodology--with-selection-guidelines-and-action-guidelines-for-inventory-methods-on-establishing-sustainable-yields-of-wild-growing-cites-plants">Development of a methodological framework (methodology) with selection guidelines and action guidelines for inventory methods on establishing sustainable yields of wild growing CITES plants</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/asia-pacific-fcpf-capacity-building-project-on-redd-">Asia-Pacific FCPF capacity building project on REDD+</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/news/ansab-awards-three-sub-projects-for-asia-pacific-fcpf-capacity-building-project-on-redd-">ANSAB awards three sub-projects for Asia-Pacific FCPF capacity building project on REDD+</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/projects/himalayan-plants-for-people--sustainable-trade-for-biodiversity-and-development">Himalayan plants for people: Sustainable trade for biodiversity and development</a></td>
                                    </tr>
                                    <tr class="item-list-item">
                                       <td><a href="https://ansab.org.np/news/expression-of-interest-for-internal-audit-of-%E2%80%9Casia-pacific-fcpf-capacity-building-project-on-redd-%E2%80%9D-project-for-fiscal-year-2078-2079-and-2079-2080">Expression of Interest for internal audit of “Asia Pacific FCPF Capacity Building Project on REDD+” project for fiscal year 2078/2079 and 2079/2080</a></td>
                                    </tr>
                                 </tbody>
                              </table>
                              <button class="btn btn-primary" id="next">See More</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
