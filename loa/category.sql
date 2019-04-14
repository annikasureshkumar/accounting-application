using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Accapp
{
    #region Category
    public class Category
    {
        #region Member Variables
        protected int _CAT_ID;
        protected string _CAT_NAME;
        protected string _DESCRIPTION;
        #endregion
        #region Constructors
        public Category() { }
        public Category(string CAT_NAME, string DESCRIPTION)
        {
            this._CAT_NAME=CAT_NAME;
            this._DESCRIPTION=DESCRIPTION;
        }
        #endregion
        #region Public Properties
        public virtual int CAT_ID
        {
            get {return _CAT_ID;}
            set {_CAT_ID=value;}
        }
        public virtual string CAT_NAME
        {
            get {return _CAT_NAME;}
            set {_CAT_NAME=value;}
        }
        public virtual string DESCRIPTION
        {
            get {return _DESCRIPTION;}
            set {_DESCRIPTION=value;}
        }
        #endregion
    }
    #endregion
}