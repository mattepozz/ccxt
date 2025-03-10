<?php

namespace ccxt\async;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

use Exception; // a common import
use \ccxt\ExchangeError;
use \ccxt\ArgumentsRequired;

class coinmate extends Exchange {

    public function describe() {
        return $this->deep_extend(parent::describe (), array(
            'id' => 'coinmate',
            'name' => 'CoinMate',
            'countries' => array( 'GB', 'CZ', 'EU' ), // UK, Czech Republic
            'rateLimit' => 1000,
            'has' => array(
                'CORS' => true,
                'spot' => true,
                'margin' => false,
                'swap' => false,
                'future' => false,
                'option' => false,
                'addMargin' => false,
                'cancelOrder' => true,
                'createOrder' => true,
                'createReduceOnlyOrder' => false,
                'fetchBalance' => true,
                'fetchBorrowRate' => false,
                'fetchBorrowRateHistories' => false,
                'fetchBorrowRateHistory' => false,
                'fetchBorrowRates' => false,
                'fetchBorrowRatesPerSymbol' => false,
                'fetchFundingHistory' => false,
                'fetchFundingRate' => false,
                'fetchFundingRateHistory' => false,
                'fetchFundingRates' => false,
                'fetchIndexOHLCV' => false,
                'fetchIsolatedPositions' => false,
                'fetchLeverage' => false,
                'fetchMarkets' => true,
                'fetchMarkOHLCV' => false,
                'fetchMyTrades' => true,
                'fetchOpenOrders' => true,
                'fetchOrder' => true,
                'fetchOrderBook' => true,
                'fetchOrders' => true,
                'fetchPosition' => false,
                'fetchPositions' => false,
                'fetchPositionsRisk' => false,
                'fetchPremiumIndexOHLCV' => false,
                'fetchTicker' => true,
                'fetchTrades' => true,
                'fetchTransactions' => true,
                'reduceMargin' => false,
                'setLeverage' => false,
                'setMarginMode' => false,
                'setPositionMode' => false,
            ),
            'urls' => array(
                'logo' => 'https://user-images.githubusercontent.com/51840849/87460806-1c9f3f00-c616-11ea-8c46-a77018a8f3f4.jpg',
                'api' => 'https://coinmate.io/api',
                'www' => 'https://coinmate.io',
                'fees' => 'https://coinmate.io/fees',
                'doc' => array(
                    'https://coinmate.docs.apiary.io',
                    'https://coinmate.io/developers',
                ),
                'referral' => 'https://coinmate.io?referral=YTFkM1RsOWFObVpmY1ZjMGREQmpTRnBsWjJJNVp3PT0',
            ),
            'requiredCredentials' => array(
                'apiKey' => true,
                'secret' => true,
                'uid' => true,
            ),
            'api' => array(
                'public' => array(
                    'get' => array(
                        'orderBook',
                        'ticker',
                        'transactions',
                        'tradingPairs',
                    ),
                ),
                'private' => array(
                    'post' => array(
                        'balances',
                        'bitcoinCashWithdrawal',
                        'bitcoinCashDepositAddresses',
                        'bitcoinDepositAddresses',
                        'bitcoinWithdrawal',
                        'bitcoinWithdrawalFees',
                        'buyInstant',
                        'buyLimit',
                        'cancelOrder',
                        'cancelOrderWithInfo',
                        'createVoucher',
                        'dashDepositAddresses',
                        'dashWithdrawal',
                        'ethereumWithdrawal',
                        'ethereumDepositAddresses',
                        'litecoinWithdrawal',
                        'litecoinDepositAddresses',
                        'openOrders',
                        'order',
                        'orderHistory',
                        'orderById',
                        'pusherAuth',
                        'redeemVoucher',
                        'replaceByBuyLimit',
                        'replaceByBuyInstant',
                        'replaceBySellLimit',
                        'replaceBySellInstant',
                        'rippleDepositAddresses',
                        'rippleWithdrawal',
                        'sellInstant',
                        'sellLimit',
                        'transactionHistory',
                        'traderFees',
                        'tradeHistory',
                        'transfer',
                        'transferHistory',
                        'unconfirmedBitcoinDeposits',
                        'unconfirmedBitcoinCashDeposits',
                        'unconfirmedDashDeposits',
                        'unconfirmedEthereumDeposits',
                        'unconfirmedLitecoinDeposits',
                        'unconfirmedRippleDeposits',
                    ),
                ),
            ),
            'fees' => array(
                'trading' => array(
                    'tierBased' => true,
                    'percentage' => true,
                    'maker' => 0.12 / 100,
                    'taker' => 0.25 / 100,
                    'tiers' => array(
                        'taker' => array(
                            array( 0, 0.25 / 100 ),
                            array( 10000, 0.23 / 100 ),
                            array( 100000, 0.21 / 100 ),
                            array( 250000, 0.20 / 100 ),
                            array( 500000, 0.15 / 100 ),
                            array( 1000000, 0.13 / 100 ),
                            array( 3000000, 0.10 / 100 ),
                            array( 15000000, 0.05 / 100 ),
                        ),
                        'maker' => array(
                            array( 0, 0.12 / 100 ),
                            array( 10000, 0.11 / 100 ),
                            array( 1000000, 0.10 / 100 ),
                            array( 250000, 0.08 / 100 ),
                            array( 500000, 0.05 / 100 ),
                            array( 1000000, 0.03 / 100 ),
                            array( 3000000, 0.02 / 100 ),
                            array( 15000000, 0 ),
                        ),
                    ),
                ),
                'promotional' => array(
                    'trading' => array(
                        'maker' => 0.05 / 100,
                        'taker' => 0.15 / 100,
                        'tiers' => array(
                            'taker' => array(
                                array( 0, 0.15 / 100 ),
                                array( 10000, 0.14 / 100 ),
                                array( 100000, 0.13 / 100 ),
                                array( 250000, 0.12 / 100 ),
                                array( 500000, 0.11 / 100 ),
                                array( 1000000, 0.1 / 100 ),
                                array( 3000000, 0.08 / 100 ),
                                array( 15000000, 0.05 / 100 ),
                            ),
                            'maker' => array(
                                array( 0, 0.05 / 100 ),
                                array( 10000, 0.04 / 100 ),
                                array( 1000000, 0.03 / 100 ),
                                array( 250000, 0.02 / 100 ),
                                array( 500000, 0 ),
                                array( 1000000, 0 ),
                                array( 3000000, 0 ),
                                array( 15000000, 0 ),
                            ),
                        ),
                    ),
                ),
            ),
            'options' => array(
                'promotionalMarkets' => array( 'ETH/EUR', 'ETH/CZK', 'ETH/BTC', 'XRP/EUR', 'XRP/CZK', 'XRP/BTC', 'DASH/EUR', 'DASH/CZK', 'DASH/BTC', 'BCH/EUR', 'BCH/CZK', 'BCH/BTC' ),
            ),
            'exceptions' => array(
                'exact' => array(
                    'No order with given ID' => '\\ccxt\\OrderNotFound',
                ),
                'broad' => array(
                    'Not enough account balance available' => '\\ccxt\\InsufficientFunds',
                    'Incorrect order ID' => '\\ccxt\\InvalidOrder',
                    'Minimum Order Size ' => '\\ccxt\\InvalidOrder',
                    'TOO MANY REQUESTS' => '\\ccxt\\RateLimitExceeded',
                    'Access denied.' => '\\ccxt\\AuthenticationError', // array("error":true,"errorMessage":"Access denied.","data":null)
                ),
            ),
        ));
    }

    public function fetch_markets($params = array ()) {
        $response = yield $this->publicGetTradingPairs ($params);
        //
        //     {
        //         "error":false,
        //         "errorMessage":null,
        //         "data" => array(
        //             array(
        //                 "name":"BTC_EUR",
        //                 "firstCurrency":"BTC",
        //                 "secondCurrency":"EUR",
        //                 "priceDecimals":2,
        //                 "lotDecimals":8,
        //                 "minAmount":0.0002,
        //                 "tradesWebSocketChannelId":"trades-BTC_EUR",
        //                 "orderBookWebSocketChannelId":"order_book-BTC_EUR",
        //                 "tradeStatisticsWebSocketChannelId":"statistics-BTC_EUR"
        //             ),
        //         )
        //     }
        //
        $data = $this->safe_value($response, 'data');
        $result = array();
        for ($i = 0; $i < count($data); $i++) {
            $market = $data[$i];
            $id = $this->safe_string($market, 'name');
            $baseId = $this->safe_string($market, 'firstCurrency');
            $quoteId = $this->safe_string($market, 'secondCurrency');
            $base = $this->safe_currency_code($baseId);
            $quote = $this->safe_currency_code($quoteId);
            $symbol = $base . '/' . $quote;
            $promotionalMarkets = $this->safe_value($this->options, 'promotionalMarkets', array());
            $fees = $this->safe_value($this->fees, 'trading');
            if ($this->in_array($symbol, $promotionalMarkets)) {
                $promotionalFees = $this->safe_value($this->fees, 'promotional', array());
                $fees = $this->safe_value($promotionalFees, 'trading', $fees);
            }
            $result[] = array(
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'settle' => null,
                'baseId' => $baseId,
                'quoteId' => $quoteId,
                'settleId' => null,
                'type' => 'spot',
                'margin' => false,
                'swap' => false,
                'future' => false,
                'option' => false,
                'spot' => true,
                'active' => null,
                'contract' => false,
                'linear' => null,
                'inverse' => null,
                'taker' => $this->safe_number($fees, 'taker'),
                'maker' => $this->safe_number($fees, 'maker'),
                'contractSize' => null,
                'expiry' => null,
                'expiryDatetime' => null,
                'strike' => null,
                'optionType' => null,
                'precision' => array(
                    'price' => $this->safe_integer($market, 'priceDecimals'),
                    'amount' => $this->safe_integer($market, 'lotDecimals'),
                ),
                'limits' => array(
                    'leverage' => array(
                        'min' => null,
                        'max' => null,
                    ),
                    'amount' => array(
                        'min' => $this->safe_number($market, 'minAmount'),
                        'max' => null,
                    ),
                    'price' => array(
                        'min' => null,
                        'max' => null,
                    ),
                    'cost' => array(
                        'min' => null,
                        'max' => null,
                    ),
                ),
                'info' => $market,
            );
        }
        return $result;
    }

    public function parse_balance($response) {
        $balances = $this->safe_value($response, 'data');
        $result = array( 'info' => $response );
        $currencyIds = is_array($balances) ? array_keys($balances) : array();
        for ($i = 0; $i < count($currencyIds); $i++) {
            $currencyId = $currencyIds[$i];
            $code = $this->safe_currency_code($currencyId);
            $balance = $this->safe_value($balances, $currencyId);
            $account = $this->account();
            $account['free'] = $this->safe_string($balance, 'available');
            $account['used'] = $this->safe_string($balance, 'reserved');
            $account['total'] = $this->safe_string($balance, 'balance');
            $result[$code] = $account;
        }
        return $this->safe_balance($result);
    }

    public function fetch_balance($params = array ()) {
        yield $this->load_markets();
        $response = yield $this->privatePostBalances ($params);
        return $this->parse_balance($response);
    }

    public function fetch_order_book($symbol, $limit = null, $params = array ()) {
        yield $this->load_markets();
        $request = array(
            'currencyPair' => $this->market_id($symbol),
            'groupByPriceLimit' => 'False',
        );
        $response = yield $this->publicGetOrderBook (array_merge($request, $params));
        $orderbook = $response['data'];
        $timestamp = $this->safe_timestamp($orderbook, 'timestamp');
        return $this->parse_order_book($orderbook, $symbol, $timestamp, 'bids', 'asks', 'price', 'amount');
    }

    public function fetch_ticker($symbol, $params = array ()) {
        yield $this->load_markets();
        $request = array(
            'currencyPair' => $this->market_id($symbol),
        );
        $response = yield $this->publicGetTicker (array_merge($request, $params));
        $ticker = $this->safe_value($response, 'data');
        $timestamp = $this->safe_timestamp($ticker, 'timestamp');
        $last = $this->safe_number($ticker, 'last');
        return array(
            'symbol' => $symbol,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601($timestamp),
            'high' => $this->safe_number($ticker, 'high'),
            'low' => $this->safe_number($ticker, 'low'),
            'bid' => $this->safe_number($ticker, 'bid'),
            'bidVolume' => null,
            'ask' => $this->safe_number($ticker, 'ask'),
            'vwap' => null,
            'askVolume' => null,
            'open' => null,
            'close' => $last,
            'last' => $last,
            'previousClose' => null,
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => $this->safe_number($ticker, 'amount'),
            'quoteVolume' => null,
            'info' => $ticker,
        );
    }

    public function fetch_transactions($code = null, $since = null, $limit = null, $params = array ()) {
        yield $this->load_markets();
        $request = array(
            'limit' => 1000,
        );
        if ($limit !== null) {
            $request['limit'] = $limit;
        }
        if ($since !== null) {
            $request['timestampFrom'] = $since;
        }
        if ($code !== null) {
            $currency = $this->currency($code);
            $request['currency'] = $currency['id'];
        }
        $response = yield $this->privatePostTransferHistory (array_merge($request, $params));
        $items = $response['data'];
        return $this->parse_transactions($items, null, $since, $limit);
    }

    public function parse_transaction_status($status) {
        $statuses = array(
            // any other types ?
            'COMPLETED' => 'ok',
        );
        return $this->safe_string($statuses, $status, $status);
    }

    public function parse_transaction($transaction, $currency = null) {
        //
        // deposits
        //
        //     {
        //         transactionId => 1862815,
        //         $timestamp => 1516803982388,
        //         amountCurrency => 'LTC',
        //         $amount => 1,
        //         $fee => 0,
        //         walletType => 'LTC',
        //         transferType => 'DEPOSIT',
        //         transferStatus => 'COMPLETED',
        //         $txid:
        //         'ccb9255dfa874e6c28f1a64179769164025329d65e5201849c2400abd6bce245',
        //         destination => 'LQrtSKA6LnhcwRrEuiborQJnjFF56xqsFn',
        //         destinationTag => null
        //     }
        //
        // withdrawals
        //
        //     {
        //         transactionId => 2140966,
        //         $timestamp => 1519314282976,
        //         amountCurrency => 'EUR',
        //         $amount => 8421.7228,
        //         $fee => 16.8772,
        //         walletType => 'BANK_WIRE',
        //         transferType => 'WITHDRAWAL',
        //         transferStatus => 'COMPLETED',
        //         $txid => null,
        //         destination => null,
        //         destinationTag => null
        //     }
        //
        $timestamp = $this->safe_integer($transaction, 'timestamp');
        $amount = $this->safe_number($transaction, 'amount');
        $fee = $this->safe_number($transaction, 'fee');
        $txid = $this->safe_string($transaction, 'txid');
        $address = $this->safe_string($transaction, 'destination');
        $tag = $this->safe_string($transaction, 'destinationTag');
        $currencyId = $this->safe_string($transaction, 'amountCurrency');
        $code = $this->safe_currency_code($currencyId, $currency);
        $type = $this->safe_string_lower($transaction, 'transferType');
        $status = $this->parse_transaction_status($this->safe_string($transaction, 'transferStatus'));
        $id = $this->safe_string($transaction, 'transactionId');
        $network = $this->safe_string($transaction, 'walletType');
        return array(
            'id' => $id,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601($timestamp),
            'currency' => $code,
            'amount' => $amount,
            'type' => $type,
            'txid' => $txid,
            'network' => $network,
            'address' => $address,
            'addressTo' => null,
            'addressFrom' => null,
            'tag' => $tag,
            'tagTo' => null,
            'tagFrom' => null,
            'status' => $status,
            'fee' => array(
                'cost' => $fee,
                'currency' => $code,
            ),
            'info' => $transaction,
        );
    }

    public function fetch_my_trades($symbol = null, $since = null, $limit = null, $params = array ()) {
        yield $this->load_markets();
        if ($limit === null) {
            $limit = 1000;
        }
        $request = array(
            'limit' => $limit,
        );
        if ($symbol !== null) {
            $market = $this->market($symbol);
            $request['currencyPair'] = $market['id'];
        }
        if ($since !== null) {
            $request['timestampFrom'] = $since;
        }
        $response = yield $this->privatePostTradeHistory (array_merge($request, $params));
        $data = $this->safe_value($response, 'data', array());
        return $this->parse_trades($data, null, $since, $limit);
    }

    public function parse_trade($trade, $market = null) {
        //
        // fetchMyTrades (private)
        //
        //     {
        //         transactionId => 2671819,
        //         createdTimestamp => 1529649127605,
        //         currencyPair => 'LTC_BTC',
        //         $type => 'BUY',
        //         orderType => 'LIMIT',
        //         $orderId => 101810227,
        //         amount => 0.01,
        //         price => 0.01406,
        //         $fee => 0,
        //         feeType => 'MAKER'
        //     }
        //
        // fetchTrades (public)
        //
        //     {
        //         "timestamp":1561598833416,
        //         "transactionId":"4156303",
        //         "price":10950.41,
        //         "amount":0.004,
        //         "currencyPair":"BTC_EUR",
        //         "tradeType":"BUY"
        //     }
        //
        $marketId = $this->safe_string($trade, 'currencyPair');
        $market = $this->safe_market($marketId, $market, '_');
        $priceString = $this->safe_string($trade, 'price');
        $amountString = $this->safe_string($trade, 'amount');
        $side = $this->safe_string_lower_2($trade, 'type', 'tradeType');
        $type = $this->safe_string_lower($trade, 'orderType');
        $orderId = $this->safe_string($trade, 'orderId');
        $id = $this->safe_string($trade, 'transactionId');
        $timestamp = $this->safe_integer_2($trade, 'timestamp', 'createdTimestamp');
        $fee = null;
        $feeCostString = $this->safe_string($trade, 'fee');
        if ($feeCostString !== null) {
            $fee = array(
                'cost' => $feeCostString,
                'currency' => $market['quote'],
            );
        }
        $takerOrMaker = $this->safe_string($trade, 'feeType');
        $takerOrMaker = ($takerOrMaker === 'MAKER') ? 'maker' : 'taker';
        return $this->safe_trade(array(
            'id' => $id,
            'info' => $trade,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601($timestamp),
            'symbol' => $market['symbol'],
            'type' => $type,
            'side' => $side,
            'order' => $orderId,
            'takerOrMaker' => $takerOrMaker,
            'price' => $priceString,
            'amount' => $amountString,
            'cost' => null,
            'fee' => $fee,
        ), $market);
    }

    public function fetch_trades($symbol, $since = null, $limit = null, $params = array ()) {
        yield $this->load_markets();
        $market = $this->market($symbol);
        $request = array(
            'currencyPair' => $market['id'],
            'minutesIntoHistory' => 10,
        );
        $response = yield $this->publicGetTransactions (array_merge($request, $params));
        //
        //     {
        //         "error":false,
        //         "errorMessage":null,
        //         "data":array(
        //             {
        //                 "timestamp":1561598833416,
        //                 "transactionId":"4156303",
        //                 "price":10950.41,
        //                 "amount":0.004,
        //                 "currencyPair":"BTC_EUR",
        //                 "tradeType":"BUY"
        //             }
        //         )
        //     }
        //
        $data = $this->safe_value($response, 'data', array());
        return $this->parse_trades($data, $market, $since, $limit);
    }

    public function fetch_open_orders($symbol = null, $since = null, $limit = null, $params = array ()) {
        $response = yield $this->privatePostOpenOrders (array_merge(array(), $params));
        $extension = array( 'status' => 'open' );
        return $this->parse_orders($response['data'], null, $since, $limit, $extension);
    }

    public function fetch_orders($symbol = null, $since = null, $limit = null, $params = array ()) {
        if ($symbol === null) {
            throw new ArgumentsRequired($this->id . ' fetchOrders() requires a $symbol argument');
        }
        yield $this->load_markets();
        $market = $this->market($symbol);
        $request = array(
            'currencyPair' => $market['id'],
        );
        // offset param that appears in other parts of the API doesn't appear to be supported here
        if ($limit !== null) {
            $request['limit'] = $limit;
        }
        $response = yield $this->privatePostOrderHistory (array_merge($request, $params));
        return $this->parse_orders($response['data'], $market, $since, $limit);
    }

    public function parse_order_status($status) {
        $statuses = array(
            'FILLED' => 'closed',
            'CANCELLED' => 'canceled',
            'PARTIALLY_FILLED' => 'open',
            'OPEN' => 'open',
        );
        return $this->safe_string($statuses, $status, $status);
    }

    public function parse_order_type($type) {
        $types = array(
            'LIMIT' => 'limit',
            'MARKET' => 'market',
        );
        return $this->safe_string($types, $type, $type);
    }

    public function parse_order($order, $market = null) {
        //
        // limit sell
        //
        //     {
        //         $id => 781246605,
        //         $timestamp => 1584480015133,
        //         trailingUpdatedTimestamp => null,
        //         $type => 'SELL',
        //         currencyPair => 'ETH_BTC',
        //         price => 0.0345,
        //         amount => 0.01,
        //         $stopPrice => null,
        //         originalStopPrice => null,
        //         marketPriceAtLastUpdate => null,
        //         marketPriceAtOrderCreation => null,
        //         orderTradeType => 'LIMIT',
        //         hidden => false,
        //         trailing => false,
        //         $clientOrderId => null
        //     }
        //
        // limit buy
        //
        //     {
        //         $id => 67527001,
        //         $timestamp => 1517931722613,
        //         trailingUpdatedTimestamp => null,
        //         $type => 'BUY',
        //         price => 5897.24,
        //         remainingAmount => 0.002367,
        //         originalAmount => 0.1,
        //         $stopPrice => null,
        //         originalStopPrice => null,
        //         marketPriceAtLastUpdate => null,
        //         marketPriceAtOrderCreation => null,
        //         $status => 'CANCELLED',
        //         orderTradeType => 'LIMIT',
        //         hidden => false,
        //         avgPrice => null,
        //         trailing => false,
        //     }
        //
        $id = $this->safe_string($order, 'id');
        $timestamp = $this->safe_integer($order, 'timestamp');
        $side = $this->safe_string_lower($order, 'type');
        $priceString = $this->safe_string($order, 'price');
        $amountString = $this->safe_string($order, 'originalAmount');
        $remainingString = $this->safe_string_2($order, 'remainingAmount', 'amount');
        $status = $this->parse_order_status($this->safe_string($order, 'status'));
        $type = $this->parse_order_type($this->safe_string($order, 'orderTradeType'));
        $averageString = $this->safe_string($order, 'avgPrice');
        $marketId = $this->safe_string($order, 'currencyPair');
        $symbol = $this->safe_symbol($marketId, $market, '_');
        $clientOrderId = $this->safe_string($order, 'clientOrderId');
        $stopPrice = $this->safe_number($order, 'stopPrice');
        return $this->safe_order(array(
            'id' => $id,
            'clientOrderId' => $clientOrderId,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601($timestamp),
            'lastTradeTimestamp' => null,
            'symbol' => $symbol,
            'type' => $type,
            'timeInForce' => null,
            'postOnly' => null,
            'side' => $side,
            'price' => $priceString,
            'stopPrice' => $stopPrice,
            'amount' => $amountString,
            'cost' => null,
            'average' => $averageString,
            'filled' => null,
            'remaining' => $remainingString,
            'status' => $status,
            'trades' => null,
            'info' => $order,
            'fee' => null,
        ), $market);
    }

    public function create_order($symbol, $type, $side, $amount, $price = null, $params = array ()) {
        yield $this->load_markets();
        $method = 'privatePost' . $this->capitalize($side);
        $request = array(
            'currencyPair' => $this->market_id($symbol),
        );
        if ($type === 'market') {
            if ($side === 'buy') {
                $request['total'] = $this->amount_to_precision($symbol, $amount); // $amount in fiat
            } else {
                $request['amount'] = $this->amount_to_precision($symbol, $amount); // $amount in fiat
            }
            $method .= 'Instant';
        } else {
            $request['amount'] = $this->amount_to_precision($symbol, $amount); // $amount in crypto
            $request['price'] = $this->price_to_precision($symbol, $price);
            $method .= $this->capitalize($type);
        }
        $response = yield $this->$method (array_merge($request, $params));
        $id = $this->safe_string($response, 'data');
        return array(
            'info' => $response,
            'id' => $id,
        );
    }

    public function fetch_order($id, $symbol = null, $params = array ()) {
        yield $this->load_markets();
        $request = array(
            'orderId' => $id,
        );
        $market = null;
        if ($symbol) {
            $market = $this->market($symbol);
        }
        $response = yield $this->privatePostOrderById (array_merge($request, $params));
        $data = $this->safe_value($response, 'data');
        return $this->parse_order($data, $market);
    }

    public function cancel_order($id, $symbol = null, $params = array ()) {
        //   array("error":false,"errorMessage":null,"data":array("success":true,"remainingAmount":0.01))
        $request = array( 'orderId' => $id );
        $response = yield $this->privatePostCancelOrderWithInfo (array_merge($request, $params));
        return array(
            'info' => $response,
        );
    }

    public function nonce() {
        return $this->milliseconds();
    }

    public function sign($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urls['api'] . '/' . $path;
        if ($api === 'public') {
            if ($params) {
                $url .= '?' . $this->urlencode($params);
            }
        } else {
            $this->check_required_credentials();
            $nonce = (string) $this->nonce();
            $auth = $nonce . $this->uid . $this->apiKey;
            $signature = $this->hmac($this->encode($auth), $this->encode($this->secret));
            $body = $this->urlencode(array_merge(array(
                'clientId' => $this->uid,
                'nonce' => $nonce,
                'publicKey' => $this->apiKey,
                'signature' => strtoupper($signature),
            ), $params));
            $headers = array(
                'Content-Type' => 'application/x-www-form-urlencoded',
            );
        }
        return array( 'url' => $url, 'method' => $method, 'body' => $body, 'headers' => $headers );
    }

    public function handle_errors($code, $reason, $url, $method, $headers, $body, $response, $requestHeaders, $requestBody) {
        if ($response !== null) {
            if (is_array($response) && array_key_exists('error', $response)) {
                // array("error":true,"errorMessage":"Minimum Order Size 0.01 ETH","data":null)
                if ($response['error']) {
                    $message = $this->safe_string($response, 'errorMessage');
                    $feedback = $this->id . ' ' . $message;
                    $this->throw_exactly_matched_exception($this->exceptions['exact'], $message, $feedback);
                    $this->throw_broadly_matched_exception($this->exceptions['broad'], $message, $feedback);
                    throw new ExchangeError($this->id . ' ' . $this->json($response));
                }
            }
        }
        if ($code > 400) {
            if ($body) {
                $feedback = $this->id . ' ' . $body;
                $this->throw_exactly_matched_exception($this->exceptions['exact'], $body, $feedback);
                $this->throw_broadly_matched_exception($this->exceptions['broad'], $body, $feedback);
                throw new ExchangeError($feedback); // unknown $message
            }
            throw new ExchangeError($this->id . ' ' . $body);
        }
    }
}
