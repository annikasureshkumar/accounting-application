using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Accapp
{
    #region List_of_accounts
    public class List_of_accounts
    {
        #region Member Variables
        protected int _ACC_ID;
        protected string _ACC_NAME;
        protected unknown _PHONE;
        protected int _BALANCE;
        protected int _CATEGORY_ID;
        #endregion
        #region Constructors
        public List_of_accounts() { }
        public List_of_accounts(string ACC_NAME, unknown PHONE, int BALANCE, int CATEGORY_ID)
        {
            this._ACC_NAME=ACC_NAME;
            this._PHONE=PHONE;
            this._BALANCE=BALANCE;
            this._CATEGORY_ID=CATEGORY_ID;
        }
        #endregion
        #region Public Properties
        public virtual int ACC_ID
        {
            get {return _ACC_ID;}
            set {_ACC_ID=value;}
        }
        public virtual string ACC_NAME
        {
            get {return _ACC_NAME;}
            set {_ACC_NAME=value;}
        }
        public virtual unknown PHONE
        {
            get {return _PHONE;}
            set {_PHONE=value;}
        }
        public virtual int BALANCE
        {
            get {return _BALANCE;}
            set {_BALANCE=value;}
        }
        public virtual int CATEGORY_ID
        {
            get {return _CATEGORY_ID;}
            set {_CATEGORY_ID=value;}
        }
        #endregion
    }
    #endregion
}