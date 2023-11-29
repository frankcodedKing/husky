@extends('layouts.spacedcustomlayout')

@section('body')
    <div class="main-content">

        <!--header section start-->
        <section class="breadcrumb-section" style="background-image: url('assets/images/location.png')">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- breadcrumb Section Start -->
                        <div class="breadcrumb-content">
                            <h5>About Page</h5>
                        </div>
                        <!-- Breadcrumb section End -->
                    </div>
                </div>
            </div>
        </section>

        <!--about us page content start-->
        <section class="section-padding about-us-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div>
                            <h1>Brief History</h1>


                            <p>
                                In 2000 Hieu Jiang founded {{ $compd ? $compd->companyname : 'company name' }} and was
                                aided by a friend and
                                associate David Williams they began managing discretionary assets with a fundamental belief
                                in capitalism and free capital markets. Having started the fund with just $20 million and
                                his vision for a well-renowned fund capable of managing investor's funds in various asset
                                classes ranging from real estate, forex markets, Oil, Gold, and Emerging technologies
                                including Digital currencies & derivatives, while mitigating risk using well-structured
                                strategies at various entries by our expert analysts the fund thrived & became a Billion
                                dollar Fund. With David’s experience and the tenacity of Hieu, they were able to make great
                                achievements. After the third year of inception, Mark Siegel came in as an expert marketer
                                and strategist and with the efforts of this trio,
                                {{ $compd ? $compd->companyname : 'company name' }} has since been
                                on its way to the top.
                                In a high inflation rate environment of the last decade, institutional investors have
                                steadily increased their allocations to the Fund in a bid to achieve greater returns in a
                                diversified Fund. We are interested in successful and transparent partners that will create
                                high trading and investment volume for we are proud to help many customers to make revenue
                                as we provide real-time market data from leading analytical agencies.</p>
                            <p>
                                In Aspen, the security of your information& funds is of top most priority, hence we have
                                provided 2FA to provide an extra layer of security as well as an efficient capital
                                protection policy that reduces the risk involved to a great extent. We are in control of our
                                investors experience as we operate using our own proprietary sophisticated trading
                                technologies that allow us to react quickly to market trends and investors demands to
                                regulate changes with no reliance on external technology.
                            </p>
                            <p>
                                {{ $compd ? $compd->companyname : 'company name' }} has contributed to the recognition of
                                distinct investment strategies, we use these
                                advancements as the foundation for a new series of strategies including Gap strategy, short
                                selling, and flag pattern.
                                We generate income for our clients by trading cryptocurrency using advanced techniques like
                                futures (using long and shorts while maximizing leverage), arbitrage trading using
                                specialized bots, investments in Binance launchpad projects, and polkastarter IDO amongst
                                other lucrative strategies while having your funds protected.
                            </p>
                            <p>
                                {{ $compd ? $compd->companyname : 'company name' }} has had a very strong relationship
                                with equity and funding
                                providers since our inception, we have also had the experience of working across multiple
                                sectors and offering a variety of full partner-led services from experienced professionals
                                with a passion for working on initial public and exchange offerings, IDO’s, DAO’s, DEFI,
                                blue-chip stocks, smart contract applications, corporate finance transactions, delivering
                                transactions on the best all-around investments services ranging from acquisitions, MBO,
                                Growth and capital development, replacement capital, real estates funding and arranging long
                                term financing. Whatever the investment capacity you have in mind, Aspen is committed to
                                providing you with a ladder to successful investments as we bring billionaire strategies to
                                the average man's doorstep. As at 31st December 2021, as a Fund, we had $165 Billion under
                                our direction on behalf of 37,000 investor clients and over 1,350 advisers. In a world
                                filled with financial uncertainties and inconsistencies, the pandemic that triggered a
                                historic stock market sell-off in March, shut down large sectors of the economy, and
                                swallowed up millions of jobs, Aspen Financial has been dedicated to being a global brand in
                                financial management services performing expectedly with its forecasts from previous years.
                            </p>
                            <p>

                                In addition, we have dedicated significant resources to the emerging field of behavioral
                                finance to better understand not just the tools of Finance, but also how investors use these
                                tools. Our research has led us to develop practical applications of behavioral finance in
                                our portfolio management process, we urge you to join us on this path to success with Aspen
                                by creating a Portfolio with us now.
                            </p>


                        </div>


                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Online Section End -->

    <div class="clearfix"></div>
@endsection
