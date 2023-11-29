@extends('layouts.spacedcustomlayout')
<style>
    .coin-figure {

        display: flex;
        justify-content: center;
        align-items: center;
        margin: 20px 0;
    }

    .coinlib {
        width: 90%;
    }
</style>
@section('body')
    <div class="main-content">


        <!--header section start-->
        <section class="breadcrumb-section" style="background-image: url('assets/images/crypt1.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- breadcrumb Section Start -->
                        <div class="breadcrumb-content">
                            <h5>Cryptocurrency</h5>
                        </div>
                        <!-- Breadcrumb section End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <!--<div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank">-->
            <script type="text/javascript" src="../s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                {
                    "symbols": [{
                            "proName": "FX_IDC:EURUSD",
                            "title": "EUR/USD"
                        },
                        {
                            "proName": "BITSTAMP:BTCUSD",
                            "title": "BTC/USD"
                        },
                        {
                            "proName": "BITSTAMP:ETHUSD",
                            "title": "ETH/USD"
                        },
                        {
                            "description": "BNB/USD",
                            "proName": "FTX:BNBUSD"
                        },
                        {
                            "description": "LTC/USD",
                            "proName": "BITFINEX:LTCUSD"
                        },
                        {
                            "description": "DOG/USD",
                            "proName": "BITFINEX:DOGUSD"
                        },
                        {
                            "description": "ADA/USD",
                            "proName": "BINANCE:ADAUSDT"
                        }
                    ],
                    "showSymbolLogo": true,
                    "colorTheme": "light",
                    "isTransparent": false,
                    "displayMode": "adaptive",
                    "locale": "en"
                }
            </script>
        </div>
        <!-- TradingView Widget END -->

        <!--about us page content start-->
        <section class="section-padding about-us-page">
            <div class="container">
                <div class="row">



                    <div class="col-md-12">
                        <h1>Cryptocurrencies</h1>
                        <div class="coin-figure">
                            <section class="coinlib">
                                <div
                                    style="height:600px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F; padding: 0px; margin: 0px; width: 100%;">
                                    <div style="height:580px; padding:0px; margin:0px; width: 100%;"><iframe
                                            src="https://widget.coinlib.io/widget?type=full_v2&theme=light&cnt=20&pref_coin_id=1505&graph=yes"
                                            width="100%" height="576px" scrolling="yes" marginwidth="0" marginheight="0"
                                            frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
                                    </div>
                                    <div
                                        style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;">
                                        <a href="#" target="_blank"
                                            style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency
                                            Prices</a>&nbsp;by Aspen Financial Management</div>
                                </div>
                            </section>
                        </div>

                        <div>


                        </div>
                        <p>
                            A cryptocurrency is a digital or virtual currency that uses cryptography for security. It is
                            difficult to counterfeit because of this security feature. A defining feature of a
                            cryptocurrency and arguably its most endearing allure, is its organic nature; it is not issued
                            by any central authority, rendering it theoretically immune to government interference or
                            manipulation. The first cryptocurrency to capture the public imagination is Bitcoin, which was
                            launched in 2009 by an individual or group known under the pseudonym, Satoshi Nakamoto. As of
                            May 2018, there were over 17 million bitcoins in circulation with a total market value of over
                            $140 billion. Bitcoin’s success has spawned several competing cryptocurrencies, such as
                            Litecoin, Ethereum, Ripple, etc <br>
                            Cryptocurrency trading means taking a financial position on the price direction of
                            individual cryptocurrencies against the dollar (in crypto/dollar pairs) or against another
                            crypto, via crypto to crypto pairs. CFDs (contracts for difference) are a particularly popular
                            way to trade cryptocurrencies as they allow for greater flexibility, the use of leverage and the
                            ability to take short as well as long positions.
                        </p>

                        <p>
                            <strong>
                                Cryptocurrency trading incurs many of the risks of trading on any other market, as well as
                                some unique challenges.</strong>
                            <br>
                        <ul>
                            <li>
                                Volatility.  Cryptocurrency is volatile. This is one of the things that makes it attractive
                                to traders, but it also makes it very risky. Double-digit intra-day price swings are common,
                                and drastic shifts can happen in just minutes, and with our arbitrage strategies in position
                                and our analysts who make precise entries and exits helping the Fund, capitalise on
                                significant & volatile changes. Aspen has consistently over the years managed the risks that
                                come with this asset class and mitigated risk appropriately.
                            <li>
                                Central to the appeal and functions of Bitcoin Technology, it is used to store an online
                                ledger of all the transactions that have ever been conducted using bitcoins, providing a
                                data structure for this ledger that is exposed to a limited threat from hackers and can be
                                copied across all computers running Bitcoin software. Every new block generated must be
                                verified by the ledgers of each user on the market, making it almost impossible to forge
                                transaction histories. Many experts see this blockchain as having important uses in
                                technologies, such as online voting, crowdfunding and major financial institutions such as
                                JP Morgan Chase see potential in cryptocurrencies to lower transaction costs by making
                                payment processing more efficient.
                            </li>
                            <li>
                                Unregulated, manipulated markets. The cryptocurrency markets are largely unregulated
                                compared to more traditional markets. It’s an open secret that wash trading and market
                                manipulation are common. They’re also a lot less liquid than many other markets, which can
                                contribute to the volatility and make it easier for well-moneyed “whales” to manipulate
                                prices, force liquidations and similar. Exchanges themselves are sometimes accused of
                                manipulating their own markets against their own customers even with all these Aspen has
                                carefully and tenaciously chosen crypto assets with long term prospects & good utility value
                                for the future. And only after carefully studying these assets do we decide which we invest
                                in and which not to.
                            <li>
                                New patterns. Markets will often follow patterns, but often they won’t. This is a risk when
                                trading anything, but the unique characteristics of the cryptocurrency market means it’s a
                                particular advantage here.

                            </li>
                            <li>
                                Being over-exposed. Limiting our exposure and consistently setting up take profit and stop
                                loss orders to limit our exposure in the event of drastic swings.

                            </li>
                            <li>
                                Using excessive leverage. Many cryptocurrency exchanges will offer up to 100x leverage,
                                dramatically magnifying the potential risks. The volatility of cryptocurrency, combined with
                                high leverage trading, can see positions be liquidated extremely quickly. And with this in
                                mind we carefully plot our leverages in the market so we don't incur more than we can afford
                                to loose in the markets at every given time.

                            </li>
                            <li>Not knowing when to fold. Whether you’re up or down, it’s important to know when to close a
                                position and either take profits, or cut your losses.</li>
                        </ul>

                        <hr>


                        </p>




                    </div>

                </div>

                <div class="row">

                    <strong>
                        The Growing Popularity of Cryptocurrency Trading</strong>
                    <br>
                    <div class="col-md-12">
                        <p>
                            Over the past decade, since the internet debut of Bitcoin, cryptocurrency trading has become
                            increasingly popular. Cryptocurrencies are digital coins which are created using blockchain or
                            peer-to-peer technology that uses cryptography – for security. They differ from fiat currencies
                            issued by governments from around the world because they are not tangible: instead, they are
                            made up of bits and bytes of data. Moreover, cryptocurrencies do not have a central body or
                            authority such as a central bank that issues them or regulates their circulation in the economy.
                            As cryptocurrencies are not issued by any government body, they are not considered legal tender.

                            <br>
                            Even though cryptocurrencies are not recognised as legal tender in the global economy, they have
                            the potential of changing the financial landscape and this makes them hard to ignore. At the
                            same time, the blockchain technology, which forms the foundation of cryptocurrency creation, has
                            opened up new investment opportunities for traders to capitalise on.
                            <br>
                            Our Mining equipments are powered by a setup of optimized GPUs (graphic processing units). These
                            GPUs are placed in ‘Rigs’ which are specifically designed to house as much hashing power as
                            efficiently as possible. The miner's software is configured for maximum performance by mining
                            Kernels (hardware operating systems) like that we’ve developed in-house.
                        </p>
                    </div>

                    <hr>


                </div>
                <div class="row">
                    <h3>Types of Cryptocurrencies</h3>
                    <p>While there are currently hundreds of cryptocurrencies available, Aspen's interest appears to be
                        focused on approximately half a dozen cryptocurrencies. Included in the list of most popular
                        cryptocurrencies are Bitcoin, which is regarded as the original cryptocurrency. Due to a “hard fork”
                        in the original Bitcoin blockchain, Bitcoin branched out two new additional virtual coins: Bitcoin
                        Cash and Bitcoin Cash ABC. Other popular cryptocurrencies that are frequently traded on
                        cryptocurrency exchanges and online CFD trading platforms, include Ethereum, and Litecoin etc.
                        <br>
                        Popular cryptocurrencies can be broken down into several main types. There are those intended to
                        offer an alternative to fiat currencies. These include Bitcoin, Bitcoin Cash (BCH), Bitcoin Cash ABC
                        and Litecoin. Ethereum, on the other hand, is only intended to be ‘spent’ to use the Ethereum smart
                        contracts platform, which can be used to build decentralised applications (Dapps). Ethereum is,
                        therefore, considered more of a ‘utility token’ than a currency. Finally, there is the Crypto 10
                        index, which can be compared to a stock market or currency index but is made up of the 10 largest
                        and most liquid cryptocurrency assets.
                    </p>
                </div>
                <div class="row">
                    <h3>Bitcoin (BTC)</h3>
                    <p>In 2008, Bitcoin or BTC was the first cryptocurrency that was introduced to the world. This
                        cryptocurrency was the first to adopt blockchain technology. Today, Bitcoin has become one of the
                        most valuable cryptocurrencies in the industry with its value surpassing even that of gold.
                    </p>
                </div>
                <div class="row">
                    <h3>Bitoin cash (BTCH)</h3>
                    <p>Bitcoin Cash is the result of a hard fork that occurred on the original Bitcoin blockchain in August
                        2017. The change was an attempt to allow for larger blocks on the original blockchain, therefore
                        allowing for faster processing of transactions.

                    </p>
                </div>
                <div class="row">
                    <h3>Crypto 10 index</h3>
                    <p>The Crypto 10 Index is an index designed to offer a tradable benchmark for the cryptocurrency asset
                        class. It is comprised of the 10 largest, most liquid cryptocurrencies and tokens, with prices an
                        average of those on multiple major exchanges. The index was standardized at 1000 points on 23
                        December 2016 and as of 9 January 2018 has been recalculated against the market movements of its 10
                        constituents on an ongoing basis.
                    </p>
                </div>
                <div class="row">
                    <h3>Ethereum(ETH)</h3>
                    <p>Designed to be a fast way to process transactions, Ethereum is a blockchain network that was
                        developed based on the original Bitcoin blockchain technology. The cryptocurrency was first proposed
                        by Vitalik Buterin in November 2013.
                    </p>
                </div>
                <div class="row">
                    <h3>Litecoin (LTC)</h3>
                    <p>Litecoin was introduced to the cryptocurrency world in October 2011 as an attempt to facilitate cross
                        border payments. It was designed to offer faster verification of transactions compared to Bitcoin.
                    </p>
                </div>
                <div class="row">
                    <h3>HOW we earn from Cryptocurrencies</h3>
                    <p>If you’re wondering how to make money from cryptocurrency right now – these are some methods: </p>
                </div>
                <div class="row">

                    <p>Investing in Promising New Coins Early – The overall best way to make money with cryptocurrency is to
                        invest in the best altcoins as early as possible. After all, had invested in Bitcoin when the
                        digital currency was first launched in 2009, you would have paid a tiny fraction of one cent.
                        Similarly, Ethereum was trading at just $0.75 per token when its token was released in 2015. Both of
                        the aforementioned projects are now worth millions of dollars and have subsequently generated
                        significant returns for our investors at Aspen Financial Management.


                        <br>
                        • Staking and Interest – We at aspen earn Passive Income on Idle Cryptocurrency Tokens for our
                        investors. There are two notable concepts in the cryptocurrency markets that enable you to earn
                        passive income on idle digital tokens that you own. The first is crypto staking, which involves
                        locking your tokens away for a certain amount of time to help validate transactions on
                        proof-of-stake blockchain networks. Examples of leading staking networks include Cardano, Tron, and
                        very soon – Ethereum. Crucially, you will receive a rate of interest for as long as your tokens are
                        locked away for a long period of time.


                        <br>
                        • Day Trading – One of the most lucrative ways to make money for our investors at Aspen through
                        cryptocurrency is to actively engage in day trading. However to achieve this we have a basic
                        understanding of how to analyze prices to determine whether the token in question is likely to rise
                        or fall in value, and this analysisis carefully conducted by our expert analysis in the emerging
                        technologies market, and with the aid of our bots we are able to achieve massive success day trading
                        cryptocurrencies . If you can do this, you can make money trading crypto throughout the day. The
                        overarching concept with crypto day trading is that you will look to take advantage of short-term
                        volatility. Furthermore, seasoned traders in this market will rarely – if ever, hold onto a position
                        for more than a day. And as such, the objective is to open multiple positions throughout the day
                        making smaller, but frequent profits.

                        <br>

                        • HODLing – Invest in Cryptocurrency and HODL Long Term, This is because HODLing  which is a play on
                        the term ‘Hold’, simply refers to the process of buying a cryptocurrency and holding onto your
                        tokens in the long run. This is no different from buying stocks and keeping the shares for several
                        years. And in doing so, you don’t need to worry about short-term price fluctuations – especially
                        when investing in solid and established cryptocurrencies like Bitcoin and Ethereum. For example, in
                        May 2021, Ethereum was priced at $4,300 per token. Just one month later, the price of Ethereum had
                        dropped to lows of $2,100. Had you panicked and sold your ETH tokens, you would have made a loss of
                        approximately 50%. However, had you engaged in HODLing – by November of the same year, Ethereum was
                        trading at nearly $4,900 per token. This is just one example of many. The key point here is that the
                        most effective way to invest in cryptocurrency is via a long-term strategy, and this doesn't just
                        apply to cryptocurrency

                        <br>
                        • Crypto Yield Farming and Lending Generate an Attractive APY on Your Cryptocurrencies, Although
                        both of these investment concepts allow you to earn interest passively, they actually refer to
                        slightly different methods. First and foremost, crypto yield farming refers to the process of
                        lending your idle tokens to a liquidity pool. In the vast majority of cases, you will be providing
                        much-needed liquidity to decentralized exchanges. Some of the leaders in this market include
                        Pancakeswap and Uniswap on the Binance and Ethereum blockchain networks, respectively. When you
                        deposit funds into a liquidity pool, it is often locked away for a minimum amount of time. And, for
                        as long as the tokens are in the liquidity pool, you will be paid a rate of interest. In many cases,
                        the newer and less liquid that a cryptocurrency is, the higher the respective APY offered by the
                        pool. When it comes to crypto lending, this refers to the same concept that we discussed earlier –
                        insofar that you will deposit your digital tokens into a savings account. And in doing so, your
                        tokens will be lent to those that wish to borrow funds. When engaging in crypto lending, it is
                        important that you choose your preferred platform wisely. Once again, this is why Aspen stands out
                        as the platform only lends crypto to high-grade borrowers that have been pre-vetted.

                        <br>
                        • DAOs – We buy a Share in a Decentralized Autonomous Organization. In addition to the metaverse and
                        NFTs, decentralized autonomous organizations (DAOs) are expected to play a significant role in the
                        future of cryptocurrency and blockchain technology. DAOs refer to projects that are collectively
                        owned by the community and investors. And, in order to become a part-owner of a DAO, you simply need
                        to hold the respective token. We have followed DAO's from its inception and uniswap has been in our
                        volume .There are many crypto DAOs operating and each project is unique from the next. One such
                        example is Uniswap. This project is home to a decentralized exchange that enables people to buy,
                        sell, and trade digital currencies without the presence of a centralized third party. Uniswap has
                        since launched its DAO cryptocurrency and thus – the project is owned by token holders like Aspen.
                        And, this means that any profits generated by the Uniswap exchange are subsequently distributed to
                        those holding its DAO token on a proportionate basis. Moreover, those holding a DAO token have a say
                        in how the respective project is run. This means that in order for a DAO project to make a decision
                        about future development, it must first go to a vote.

                        <br>

                        • Mining – Mine Cryptocurrency by Connecting Hardware to Your Desktop Device,  In a nutshell, mining
                        refers to the process of connecting specialist hardware to a desktop device, which, in turn,
                        connects to the blockchain of the respective cryptocurrency. The idea is that miners enable the
                        network to operate in a decentralized manner. This is because transactions are validated when the
                        mining equipment solves complex mathematical equations. And in return, miners are rewarded with
                        newly minted cryptocurrency tokens that enter into circulation, and each block is verified. For
                        instance, in the case of Bitcoin, a new block is created every 10 minutes, and this mints an
                        additional 6.25 BTC. This 6.25 BTC – which as of writing is worth over $660,000, is paid to the
                        miner that successfully solved the equation for the respective block. Although at first glance this
                        translates into a significant amount of money, Bitcoin mining consumes an unprecedented amount of
                        electricity due to the complex nature of each mathematical equation. Moreover, we have the
                        specialist hardware required to stand a chance of mining a new Bitcoin block, which is  considerable
                        in dollar terms. With that said, there are many other cryptocurrency projects that require miners
                        and in many cases, competition is thin on the ground. Ultimately, we ensure that the mining rewards
                        received are worth more than you invest, which has been the case since we diversified our resources
                        into that asset.
                        We provide a multi-algorithm, multi-coin cloud mining service using the latest technology - without
                        any pool fees. The ultimate goal of our mining operation is to make cryptocurrency mining an easy,
                        smart, and rewarding experience for all. Our services already attracted more than 2,000 active
                        clients. Our Mining facility is being continuously upgraded for mining state-of-the-art Blockchain
                        technology. Aspen’s computational performance is achieved with specifically designed mining rigs
                        that efficiently mine hashing algorithms for various cryptocurrencies such as Bitcoin, Ethereum,
                        Zcash, Dash, Monero, and others. Our Mining equipments are powered by a setup of optimized GPUs
                        (graphic processing units). These GPUs are placed in ‘Rigs’ which are specifically designed to house
                        as much hashing power as efficiently as possible. The miner's software is configured for maximum
                        performance by mining Kernels (hardware operating systems) like that we’ve developed in-house.
                    </p>
                </div>
                <div class="row">
                    <h3>Cryptocurrencies Benefits and Drawbacks</h3>
                    <p>
                        <br> <br> • Cryptocurrencies make it easier to transfer funds between two parties in a transaction;
                        these transfers are facilitated through the use of public and private keys for security purposes.
                        These fund transfers are done with minimal processing fees, allowing users to avoid the steep fees
                        charged by most banks and financial institutions for wire transfers.
                        <br> <br> • Central to the appeal and functions of Bitcoin Technology, it is used to store an online
                        ledger of all the transactions that have ever been conducted using bitcoins, providing a data
                        structure for this ledger that is exposed to a limited threat from hackers and can be copied across
                        all computers running Bitcoin software. Every new block generated must be verified by the ledgers of
                        each user on the market, making it almost impossible to forge transaction histories. Many experts
                        see this blockchain as having important uses in technologies, such as online voting, crowdfunding
                        and major financial institutions such as JP Morgan Chase see potential in cryptocurrencies to lower
                        transaction costs by making payment processing more efficient.
                        <br> <br> • However, because cryptocurrencies are virtual and do not have a central repository, a
                        digital cryptocurrency balance can be wiped out by a computer crash if a backup copy of the holdings
                        does not exist. Since prices are based on supply and demand, the rate at which a cryptocurrency can
                        be exchanged for another currency can fluctuate widely.
                        <br> <br> • The anonymous nature of cryptocurrency transactions makes them well-suited for a host of
                        nefarious activities, such as money laundering and tax evasion. However, cryptocurrency advocates
                        often value the anonymity highly. Cryptocurrencies are also considered by some economists to be a
                        speculative bubble concerned especially that the currency units such as Bitcoins, are not rooted in
                        any material goods. Bitcoin has indeed experienced some rapid surges and collapses in value.
                        <br> <br> • Cryptocurrencies are not immune to the threat of hacking. In Bitcoin’s short history,
                        the company has been subject to over 40 thefts, including a few that exceeded $1 million in value.
                        Still, many observers look at cryptocurrencies as hope that a currency can exist that preserves
                        value, facilitates exchange, is more transportable than hard metals and is outside the influence of
                        central banks and governments.
                    </p>
                </div>
                <div class="row">
                    <h3>Our Mining Rigs</h3>
                    <div class="col-md-6">
                        <img class="img" src="assets/images/rig2.html">
                    </div>

                    <div class="col-md-6">
                        <img class="img" src="assets/images/rig1.jpg">
                    </div>
                </div>

            </div>





        </section>
    </div>

    <!-- Online Section End -->

    <div class="clearfix"></div>
@endsection
