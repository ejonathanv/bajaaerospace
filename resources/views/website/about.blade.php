<x-page-layout title="About Baja Aerospace Cluster" subtitle="We are a collaborative ecosystem that drives innovation, fosters synergy among companies, and promotes the development of advanced technologies and solutions in the aerospace industry">


    <section class="flex items-stretch">
        <div class="w-1/2 bg-cover bg-no-repeat bg-center" style="background-image: url({{ asset('img/about/mission-baja-aerospace.jpg') }})">

        </div>
        <div class="w-1/2 py-48 px-16">
            <h1 class="text-4xl font-bold mb-7">
                Mission
            </h1>

            <p class="text-gray-500 font-bold text-xl leading-relaxed">
                Support the aerospace industry in Baja California and Mexico in development areas technology and innovation, training and development of the required professional talent, as well as how to meet your market and supply demands with a global focus and service results oriented.
            </p>
        </div>
    </section>

    <section class="flex items-stretch">
        <div class="w-1/2 py-48 px-16">
            <h1 class="text-4xl font-bold mb-7">
                Vission
            </h1>

            <p class="text-gray-500 font-bold text-xl leading-relaxed">
                To be the benchmark for specialized technical and engineering support for the aerospace sector in Baja California in its seven (7) business segments a. Commercial Aviation, b. Defending, c. space, d. Drones, e.g. MRO/R&O, f. Logistic Air Cargo and g. Extreme Air Sports allows to maintain our leadership in Mexico in favor of our industry, through the maintenance of a specialized, inclusive and socially impact ecosystem in our community.
            </p>
        </div>
        <div class="w-1/2 bg-cover bg-no-repeat bg-center" style="background-image: url({{ asset('img/about/vission-baja-aerospace.png') }})">

        </div>
    </section>


    <section class="py-10 md:py-16" ref="section1">
        <div class="container">
            <div class="flex justify-between items-center">
                <a href="#" @click.prevent="toggleSection(1)">
                    <h1>
                        Objectives
                    </h1>
                </a>
                <a href="#" @click.prevent="toggleSection(1)">
                    <span v-if="section != 1">
                        <i class="fas text-2xl fa-chevron-down"></i>
                    </span>
                    <span v-else>
                        <i class="fas text-2xl fa-chevron-up"></i>
                    </span>
                </a>
            </div>

            <div v-if="section == 1">

                <ul class="list-disc list-inside">
                    <li>Have an updated list of companies linked to the aerospace sector that allows the easy location of your operations, products and services</li>

                    <li>Define a skills matrix to position the vocational profile of the industry in Baja California, and strengthen its response capacity with technical and professional talent that is being educated in educational institutions</li>

                    <li>Identify business opportunities for our aerospace industry and support the greater inclusion of national content through the incorporation of greater suppliers SME located in Mexico.</li>

                    <li>Carry out tasks of management, facilitation and monitoring in search of favorable solutions to problems, challenges and issues that slow down, or hinder the operations of the industry aerospace in Baja California.</li>

                    <li>Support and include companies interested in projects, initiatives or opportunities for business that require coordination and support in achieving an action plan programmed.</li>

                    <li>Act as funding manager for specific projects required by the industry aerospace, to trigger or accelerate charitable initiatives for the aerospace industry.</li>

                    <li>Promote courses, workshops, seminars and specialized presentations with the community aerospace and hold conferences and major events to publicize business capabilities and generate valuable knowledge.</li>

                    <li>Carry out promotional, representation or business trips at the state, national and to disseminate objective valuable information from the aerospace sector, that allows decision-makers to know the comparative and competitive advantages that the region offers.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="py-10 md:py-16 bg-gray-900 text-white" ref="section2">
        <div class="container">
            <div class="flex justify-between items-center">
                <a href="#" @click.prevent="toggleSection(2)">
                    <h1>
                        Core Values
                    </h1>
                </a>
                <a href="#" @click.prevent="toggleSection(2)">
                    <span v-if="section != 1">
                        <i class="fas text-2xl fa-chevron-down"></i>
                    </span>
                    <span v-else>
                        <i class="fas text-2xl fa-chevron-up"></i>
                    </span>
                </a>
            </div>

            <div v-if="section == 2">

                <div class="flex items-center space-x-10 mb-10">
                    <div>
                        <i class="fas fa-chart-line" style="font-size: 75px"></i>
                        <h1 class="text-2xl font-bold mt-7">
                            Profit-driven
                        </h1>
                        <p class="text-lg">
                            We value a profit-driven approach as an essential part of our success. We strive to achieve solid profitability and generate value for our members.
                        </p>
                    </div>

                    <div>
                        <i class="fas fa-users" style="font-size: 75px"></i>
                        <h1 class="text-2xl font-bold mt-7">
                            Entrepreneurial
                        </h1>
                        <p class="text-lg">
                            We value creativity, initiative, and a willingness to take calculated risks. Our team is constantly seeking opportunities to innovate, grow, and overcome challenges.
                        </p>
                    </div>

                    <div>
                        <i class="fas fa-handshake" style="font-size: 75px"></i>
                        <h1 class="text-2xl font-bold mt-7">
                            Engaged
                        </h1>
                        <p class="text-lg">
                            We value the commitment and dedication of our team to achieve our strategic goals. We foster a stimulating, inclusive, and collaborative work environment
                        </p>
                    </div>
                </div>

                <div class="flex items-center space-x-10 mb-10">
                    <div>
                        <i class="fas fa-award" style="font-size: 75px"></i>
                        <h1 class="text-2xl font-bold mt-7">
                            Professional
                        </h1>
                        <p class="text-lg">
                            We strive to maintain high standards of professionalism in all our interactions. We value integrity, ethics, and professional conduct in everything we do. 
                        </p>
                    </div>

                    <div>
                        <i class="fas fa-lightbulb" style="font-size: 75px"></i>
                        <h1 class="text-2xl font-bold mt-7">
                            Innovative
                        </h1>
                        <p class="text-lg">
                            We strive to be at the forefront of technology and practices in the industry. We constantly seek opportunities to innovate and lead change in our sector.
                        </p>
                    </div>

                    <div>
                        <i class="fas fa-lightbulb" style="font-size: 75px"></i>
                        <h1 class="text-2xl font-bold mt-7">
                            Costumer-focused
                        </h1>
                        <p class="text-lg">
                            We adopt a customer-focused approach, seeking to understand their needs and offering personalized, high-quality solutions that meet their requirements. 
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-page-layout>